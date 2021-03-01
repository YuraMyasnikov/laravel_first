<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeOffer extends Model
{
    use HasFactory;


    public function offer ()
    {
        return $this->belongsToMany(TradeOffer::class);
    }

}
