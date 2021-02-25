<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function index($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }
}
