<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'symbol',
        'photo',
        'status',
    ];

    public function trades()
    {
        return $this->hasMany(PracticeLog::class);
    }
}
