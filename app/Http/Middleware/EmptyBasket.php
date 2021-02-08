<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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

        /*if( is_null($order_id) )
        {
           return  'my res';
        };*/

        return $next($request);
    }
}
