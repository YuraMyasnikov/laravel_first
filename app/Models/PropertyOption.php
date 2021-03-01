<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyOption extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['property_id', 'name', 'name_en'];

    public function property()
    {
        return $this->belongsToMany(Property::class);
    }
    
}
