<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Order;

class BasketController extends Controller
{
    public function basket()
    {
        $order_id = session('order_idd');
        if(!is_null($order_id))
        {
            $order = Order::findOrFail($order_id);
        }
        return view('basket', compact('order'));
    }

    public function basketPlace()
    {
        return view('basketPlace');
    }

    public function basketAdd($product_id)
    {
        //сессия
        $order_id = session('order_idd');
        //если сессия пустая
        if( is_null($order_id) )
        {
            //создаю слудующее поле в таблице
            $order = Order::create();
            //заполняю сессию номером следующего поля таблицы Ордер
            session(['order_idd' => $order->id]);
        }
        else
        {
            // беру из таблица Ордер поле заказа
            $order = Order::find($order_id);
        }

        //проверка - добален ли товар уже в корзину
        if($order->products->contains($product_id))
        {
            $pivotRow = $order->products()->where('product_id' , $product_id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        }else
        {
            $order->products()->attach($product_id);
        }

        //используется редирект чтобы при обновлении стр. не добавлялось доп поле
        return redirect()->route('basket');
    }

    public function basketDel($product_id)
    {
        $order_id = session('order_idd');
        if( is_null($order_id) )
        {
            //используется редирект чтобы при обновлении стр. не добавлялось доп поле
            return redirect()->route('basket');
        }

        // беру из таблица Ордер поле заказа
        $order = Order::find($order_id);

        if($order->products->contains($product_id))
        {
            $pivotRow = $order->products()->where('product_id' , $product_id)->first()->pivot;
            if($pivotRow->count < 2)
            {
                $order->products()->detach($product_id);
            }
            else
                {
                    $pivotRow->count--;
                    $pivotRow->update();
                }

        }



        //используется редирект чтобы при обновлении стр. не добавлялось доп поле
        return redirect()->route('basket');
    }

}
