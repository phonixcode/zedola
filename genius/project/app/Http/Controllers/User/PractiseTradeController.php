<?php

namespace App\Http\Controllers\User;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\CryptoMethod;
use App\Models\Generalsetting;
use App\Models\PracticeLog;
use App\Models\TradeSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PractiseTradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request,$slug)
    {
        $data['schedules'] = TradeSchedule::orderBy('id','desc')->get();
        $data['method'] = CryptoMethod::whereName($request->slug)->first();
        return view('user.practise_trade.index',$data);
    }

    public function tradeMethod()
    {
        $data['methods'] = CryptoMethod::orderBy('id','desc')->get();
        return view('user.practise_trade.method',$data);
    }

    public function tradeLogs(Request $request){

        $data['logs'] = PracticeLog::whereUserId(auth()->id())
                                    ->when($request->trx_no,function($query) use ($request){
                                        return $query->where('transaction_no', $request->trx_no);
                                    })
                                    ->when($request->result,function($query) use ($request){
                                        if($request->result != 'all'){
                                            return $query->where('result',$request->result);
                                        }
                                    })
                                    ->orderBy('id','desc')->paginate(10);
        return view('user.practise_trade.history',$data);
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

        if(rootAmount($request->amount) >= $user->demo_balance){
            $response = [
                'status' => 'error',
                'message' => 'You do not have enough demo balance to trade.'
            ];
            return response()->json($response);
        }

        $data = new PracticeLog();
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

        $user->decrement('demo_balance',rootAmount($request->amount));

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
           $subject = "Practise Tradding.";
           $msg = "Hello ".$user->name."!\nYour trade successfully completed.\nThank you.";
           $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
           mail($to,$subject,$msg,$headers);
        }

        return response()->json($response);
    }

    public function addBalance(Request $request){
        $user = auth()->user();
        if($user->demo_balance >= 500){
            $response = [
                'status' => 'error',
                'message' => 'You have enough demo balance to trade.'
            ];
            return response()->json($response);
        }
        $user->demo_balance = 0;
        $user->save();

        $user->increment('demo_balance',500);

        $response = [
            'status' => 'success',
            'message' => 'Balance has been added successfully.'
        ];

        return response()->json($response);

    }


}
