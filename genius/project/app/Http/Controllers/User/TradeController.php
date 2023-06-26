<?php

namespace App\Http\Controllers\User;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\CryptoMethod;
use App\Models\Generalsetting;
use App\Models\PracticeLog;
use App\Models\Referral;
use App\Models\ReferralBonus;
use App\Models\TradeLog;
use App\Models\TradeSchedule;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TradeController extends Controller
{
    public $gs;
    public  $allusers = [];

    public function __construct()
    {
        $this->middleware('auth');
        $this->gs = Generalsetting::findOrFail(1);
    }

    public function index(Request $request,$slug)
    {
        $data['schedules'] = TradeSchedule::orderBy('id','desc')->get();
        $data['method'] = CryptoMethod::whereName($request->slug)->first();
        return view('user.trade.index',$data);
    }

    public function tradeMethod()
    {
        $data['methods'] = CryptoMethod::orderBy('id','desc')->get();
        return view('user.trade.method',$data);
    }

    public function tradeLogs(Request $request){
        $data['logs'] = TradeLog::whereUserId(auth()->id())
                                ->when($request->trx_no,function($query) use ($request){
                                    return $query->where('transaction_no', $request->trx_no);
                                })
                                ->when($request->result,function($query) use ($request){
                                    if($request->result != 'all'){
                                        return $query->where('result',$request->result);
                                    }
                                })
                                ->orderBy('id','desc')->paginate(10);
        return view('user.trade.history',$data);
    }

    public function trade(Request $request){
        $rules = [
            'currency_id' => 'required',
            'type' => 'required',
            'amount' => 'required',
            'schedule_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $method = CryptoMethod::whereId($request->currency_id)->first();
        $schedule = TradeSchedule::whereId($request->schedule_id)->first();
        $user = auth()->user();

        if(rootAmount($request->amount) >= $user->balance){
            $response = [
                'status' => 'error',
                'message' => 'You do not have enough balance to trade.'
            ];
            return response()->json($response);
        }

        $data = new TradeLog();
        $data->transaction_no = Str::random(12);
        $data->user_id = auth()->id();
        $data->crypto_method_id = $request->currency_id;
        $data->amount = rootAmount($request->amount);

        if($request->type == 1){
            $data->type = 'high';
        }
        else{
            $data->type = 'low';
        }

        if($schedule->unit == 'hours'){
            $data->result_time = Carbon::now()->addHours($schedule->time);
        }elseif($schedule->unit == 'minutes'){
            $data->result_time = Carbon::now()->addMinutes($schedule->time);
        }else{
            $data->result_time = Carbon::now()->addSeconds($schedule->time);
        }

        $data->current_crypto_rate = getCryptoRate($method->symbol);
        $data->save();

        $user->decrement('balance',rootAmount($request->amount));

        $this->transaction($data);
        $this->refferalBonus($data);

        $response = [
            'status' => 'success',
            'message' => 'Trade has been added successfully.'
        ];

        $gs = Generalsetting::first();
        $admin = Admin::first();

        if($gs->is_smtp == 1)
        {
            $data = [
                'to' => $user->email,
                'type' => "Trade",
                'cname' => $user->name,
                'oamount' => rootAmount($request->amount),
                'aname' => $admin->name,
                'aemail' => $admin->email,
                'wtitle' => $gs->title,
            ];

            $mailer = new GeniusMailer();
            $mailer->sendAutoMail($data);
        }
        else
        {
           $to = $user->email;
           $subject = "Tradding.";
           $msg = "Hello ".$user->name."!\nYour trade successfully completed.\nThank you.";
           $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
           mail($to,$subject,$msg,$headers);
        }

        return response()->json($response);
    }

    public function transaction($trade){
        $user = auth()->user();

        $trans = new Transaction();
        $trans->txnid = $trade->transaction_no;
        $trans->email = $user->email;
        $trans->amount = $trade->amount;
        $trans->type = "Trade";
        $trans->profit = "minus";
        $trans->user_id = $user->id;
        $trans->save();
    }

    public function refferalBonus($trade){
        if($this->gs->is_affilate == 1){

            $referralUser = User::whereId($trade->user_id)->first();
            if(Session::has('affilate') || ($referralUser != NULL && $referralUser->referral_id != 0)){

                if(Session::has('affilate')){
                    $this->referralUsers(Session::get('affilate'));
                }else{
                    if($referralUser->referral_id != 0){
                        $this->referralUsers($referralUser->referral_id);
                    }
                }

                $referral_ids[] = $this->allReferralId();

                if(count($this->allusers) >0){
                    $users = array_reverse($this->allusers);
                    foreach($users as $key=>$data){
                        $user = User::findOrFail($data);
                        $referral = Referral::findOrFail($referral_ids[0][$key]);

                        $referralAmount = ($trade->amount * $referral->percent)/100;

                        $bonus = new ReferralBonus();
                        $bonus->from_user_id = auth()->id();
                        $bonus->to_user_id = $user->id;
                        $bonus->percentage = $referral->percent;
                        $bonus->level = $referral->level;
                        $bonus->amount = $referralAmount;
                        $bonus->type = 'trade';
                        $bonus->save();

                        $to_user = User::findOrFail($bonus->to_user_id);
                        $trans = new Transaction();
                        $trans->email = $to_user->email;
                        $trans->amount = $referralAmount;
                        $trans->type = "Referral Bonus";
                        $trans->txnid = $trade->transaction_no;
                        $trans->user_id = $to_user->id;
                        $trans->profit = 'plus';
                        $trans->save();

                        $user->increment('balance',$referralAmount);
                        $referralAmount = 0;
                    }
                }
            }
        }
    }

    public function allReferralId(){
        $referrals = Referral::where('commission_type','trade')->get();
        if(count($referrals)>0){
            foreach($referrals as $key=>$data){
                $this->referral_ids[] = $data->id;
            }
            return $this->referral_ids;
        }
    }

    public function referralUsers($id)
    {
        $referral = Referral::where('commission_type','trade')->get();

        for($i=1; $i<=count($referral); $i++){
            $user = User::findOrFail($id);
            $this->allusers[] = $user->id;

            if($user->referral_id){
                $id = $user->referral_id;
            }else{
                return false;
            }
        }
        return $this->allusers;
    }

}
