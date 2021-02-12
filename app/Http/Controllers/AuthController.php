<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function admin()
    {
        $orders = Order::get();

        return view('Admin/private', compact('orders'));
    }

    //личныый кабинет пользователя
    public function auth(){

        $user = User::find(Auth::id());
        $orders = Order::where('user_id',$user->id)->orderBy('created_at','desc')->get();

       return view('Auth/cabinet', compact('orders'));
    }

    //заказ продукта от админа
    public function show(Order $order)
    {

        return view('admin/order', compact('order'));
    }

}
