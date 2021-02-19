<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'description', 'price', 'category_id', 'image', 'new', 'hit', 'sale','show','count'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount()
    {
        if(!is_null($this->pivot))
        {
            return $this->pivot->count * $this->price;
        }
        else
        {
            return $this->price;
        }
    }

    //scope
   public function scopeNew($query)
   {
       return $query->where('new', 1);
   }
    public function scopeHit($query)
    {
        return $query->where('hit', 1);
    }
    public function scopeSale($query)
    {
        return $query->where('sale', 1);
    }
    //<<scope

    //мутаторы
    public function setShowAttribute($value)
    {
        $this->attributes['show'] = $value == 'on' ? $value=1 : $value=0;
    }

    public function setNewAttribute($value)
    {
        $this->attributes['new'] = $value == 'on' ? $value=1 : $value=0;
    }

    public function setHitAttribute($value)
    {
        $res = $this->attributes['hit'] = $value == 'on' ? $value=1 : $value=0;
    }

    public function setSaleAttribute($value)
    {
        $res = $this->attributes['sale'] = $value == 'on' ? $value=1 : $value=0;
    }
    //<<мутаторы

    public function isNew()
    {
        return $this->new === 1;
    }

    public function isHit()
    {
        return $this->hit === 1;
    }

    public function isSale()
    {
        return $this->sale === 1;
    }

}

