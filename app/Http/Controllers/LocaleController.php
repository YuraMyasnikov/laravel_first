<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;

class LocaleController extends Controller
{
    public function index($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }

    public function currency($currencyCode = 'RUB')
    {
        session(['currency' => $currencyCode]);

        return redirect()->back();
    }
}
