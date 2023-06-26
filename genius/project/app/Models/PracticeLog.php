<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeLog extends Model
{
    use HasFactory;
    protected $fillable = [
                            'transaction_no',
                            'user_id',
                            'crypto_method_id',
                            'amount',
                            'type',
                            'schedule_id'
                        ];


    public function method(){
        return $this->belongsTo(CryptoMethod::class,'crypto_method_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
