<?php

namespace App\Http\Controllers\Frontend;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Generalsetting;
use App\Models\TradeLog;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TradeResultController extends Controller
{
    public function __construct()
    {
        $this->gs = Generalsetting::first();
    }

    public function tradeResult(){

        $trades = TradeLog::whereResult(0)->get();

        foreach($trades as $key=>$trade){

            if(now()->gt($trade->result_time)){

                $currentCryptoRate = getCryptoRate($trade->method->symbol);
                if($trade->type == 'high'){

                    if($trade->current_crypto_rate > $currentCryptoRate){
                        $this->win($trade);
                    }
                    elseif($trade->current_crypto_rate < $currentCryptoRate){
                        $this->lose($trade);
                    }
                    else{
                        $this->tie($trade);
                    }

                }else{
                    if($trade->current_crypto_rate < $currentCryptoRate){
                        $this->win($trade);
                    }
                    elseif($trade->current_crypto_rate > $currentCryptoRate){
                        $this->lose($trade);
                    }
                    else{
                        $this->tie($trade);
                    }
                }
            }

        }
    }

    public function win($trade){
        $trade = TradeLog::findOrFail($trade->id);
        $user = User::findOrFail($trade->user_id);
        $amount = 0;
        if($user){
            $amount = $trade->amount + (($trade->amount/100) * $this->gs->trade_commission);
            $user->balance = $user->balance + $amount;
            $user->save();
        }

        $trade->result = 1;
        $trade->status = 1;
        $trade->result_time = NULL;
        $trade->save();

        $this->sendEmail($user,$amount);
        $this->transaction($trade, $amount);
    }

    public function lose($trade){
        $amount = 0;
        $user = User::findOrFail($trade->user_id);
        $trade = TradeLog::findOrFail($trade->id);
        $trade->result = 2;
        $trade->status = 1;
        $trade->result_time = NULL;
        $trade->save();

        $this->sendEmail($user,$amount);
        $this->transaction($trade, $amount);
    }

    public function tie($trade){
        $amount = 0;
        $trade = TradeLog::findOrFail($trade->id);
        $user = User::findOrFail($trade->user_id);
        if($user){
            $amount = $user->balance + $trade->amount;
            $user->balance = $amount;
            $user->save();
        }

        $trade->result = 3;
        $trade->status = 1;
        $trade->result_time = NULL;
        $trade->save();

        $this->sendEmail($user,$amount);
        $this->transaction($trade, $amount);
    }

    public function transaction($trade,$amount){
        $user = User::findOrFail($trade->user_id);

        if($user){
            $trans = new Transaction();
            $trans->txnid = $trade->transaction_no;
            $trans->email = $user->email;
            $trans->amount = $amount;
            $trans->type = "Trade Profit";
            $trans->profit = "plus";
            $trans->user_id = $user->id;
            $trans->save();
        }
    }

    public function sendEmail($user,$amount){
        $gs = Generalsetting::first();
        $admin = Admin::first();

        if($user){
            if($gs->is_smtp == 1)
            {
                $data = [
                    'to' => $user->email,
                    'type' => "Trade History",
                    'cname' => $user->name,
                    'oamount' => $amount,
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
               $subject = "Trade History.";
               $msg = "Hello ".$user->name."!\nYou have a result for your trade, please go to your dashboard for the result.\nThank you.";
               $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
               mail($to,$subject,$msg,$headers);
            }
        }

    }
}
