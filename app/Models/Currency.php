<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;


    public function scopeCurrencyCode($query, $code)
    {
        return $query->where('code',$code);
    }

}
