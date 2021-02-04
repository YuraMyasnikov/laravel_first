<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }


    public function getFullPrice()
    {
        $sum = null;
        foreach ($this->products as $product)
        {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function confirmedOrder($name, $phone)
    {
        if ($this->order == 0)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('order_id');
            return true;
        }
    }

}
