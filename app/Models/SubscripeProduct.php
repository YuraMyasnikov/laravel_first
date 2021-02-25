<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use http\Env\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeMessage;

class SubscripeProduct extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'product_id'];

    public static function scopeSubscribeWithStatusZeroInProduct($query, $productId){
        return $query->where('status',0)->where('product_id',$productId)->get();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function sendEmailBySubscribe (Product $product)
    {
        $subscriptions = self::subscribeWithStatusZeroInProduct($product->id);

        foreach ($subscriptions as $subscription)
        {
            $subscription->status = 1;
            $subscription->save();
            Mail::to($subscription->email)->send(new SubscribeMessage($product));
        }
    }
}
