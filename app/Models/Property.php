<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['product_id', 'name', 'name_en'];

    public function property_option()
    {
        return $this->belongsToMany(PropertyOption::class);
    }

}
