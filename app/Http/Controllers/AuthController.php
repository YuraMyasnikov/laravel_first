<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function admin()
    {
        $orders = Order::get();

        return view('Admin/private', compact('orders'));
    }

    public function auth(){

        $order = Order::where('user_id',Auth::id())->first();

        return view('Auth/cabinet', compact('order'));
    }
}
