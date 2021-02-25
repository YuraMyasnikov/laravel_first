<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use App\Models\SubscripeProduct;

class ProductObserver
{

    /**
     * Handle the Product "updatind" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updating(Product $product)
    {  //Задача поймать момент измения количества товара
        // getOriginal - количество до изменения

        if($product->getOriginal('count') == 0 && $product->count > 0)
        {
            SubscripeProduct::sendEmailBySubscribe($product);
        }
    }

    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
