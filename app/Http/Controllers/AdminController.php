<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Order;

class AdminController extends Controller
{
    public function orders()
    {
        $orders = Order::get();

        return view('private', compact('orders'));
    }
}
