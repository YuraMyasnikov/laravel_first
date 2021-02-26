<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class Currency
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
        $selectedCurrency = \App\Models\Currency::currencyCode( session('currency') )->get();


        return $next($request);
    }
}
