<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\PracticeLog;
use App\Models\User;
use Illuminate\Http\Request;

class PractiseTradeResultController extends Controller
{
    public function __construct()
    {
        $this->gs = Generalsetting::first();
    }

    public function practiseTradeResult(){

        $trades = PracticeLog::whereResult(0)->get();

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
        $trade = PracticeLog::findOrFail($trade->id);
        $user = User::findOrFail($trade->user_id);
        if($user){
            $amount = $trade->amount + (($trade->amount/100) * $this->gs->trade_commission);
            $user->demo_balance = $user->demo_balance + $amount;
            $user->save();
        }

        $trade->result = 1;
        $trade->status = 1;
        $trade->result_time = NULL;
        $trade->save();
    }

    public function lose($trade){
        $trade = PracticeLog::findOrFail($trade->id);
        $trade->result = 2;
        $trade->status = 1;
        $trade->result_time = NULL;
        $trade->save();
    }

    public function tie($trade){
        $trade = PracticeLog::findOrFail($trade->id);
        $user = User::findOrFail($trade->user_id);
        if($user){
            $user->demo_balance = $user->demo_balance + $trade->amount;
            $user->save();
        }

        $trade->result = 3;
        $trade->status = 1;
        $trade->result_time = NULL;
        $trade->save();
    }
}
