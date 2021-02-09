<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Order;

class EmptyBasket
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $order_id = session('order_id');

        if(! is_null($order_id) )
        {
           $order = Order::findOrFail($order_id);
           if($order->products->count() == 0)
           {
               session()->flash('error', 'Корзина пуста');
               return redirect()->route('home');
           }
        };

        return $next($request);
    }
}
