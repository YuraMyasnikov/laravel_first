<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ConfirmedOrderRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSuccess;

class BasketController extends Controller
{
    /** Корзина
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     * $order_id         Выбраные товары
     * $order            Поле заявки на выбраные товары         [ id | status | name | phone | created_at | updated|at ]
     *
     */
    public function basket()
    {
        $order_id = session('order_id');
        if(!is_null($order_id))
        {
            $order = Order::findOrFail($order_id);
        }

        return view('Basket/basket', compact('order'));
    }



    /**Указать контакты заказа
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     *
     * $order_id         Выбраные товары
     * $order            Поле заявки на выбраные товары         [ id | status | name | phone | created_at | updated|at ]
     *
     */
    public function basketPlace()
    {
        $order_id = session('order_id');
        // Если никаких товаров не выбрано
        if (is_null($order_id))
        {
            return redirect()->route('home');
        }
        //Узнаю поле заявки на выбраные товары
        $order = Order::find($order_id);

        return view('Basket/basketPlace', compact('order'));
    }

    //Подтверждение заказа
    public function basketConfirm( ConfirmedOrderRequest $request)
    {
        $order_id = session('order_id');
        // Если никаких товаров не выбрано
        if (is_null($order_id))
        {
            return redirect()->route('home');
        }
        //Узнаю поле заявки на выбраные товары
        $order = Order::find($order_id);

        $success = $order->confirmedOrder($request->name, $request->phone);

        ($success) ? session()->flash('success', 'Заявка принята, в ближайшее время тебе позвонят') : '' ;


        if(Auth::check())
        {
            $order->user_id = Auth::id();
            $order->save();
        }

        foreach ($order->products as $product)
        {
            $productCount = $product->count;
            $orderCount = $product->pivot->count;
            $product = Product::where(['id'=>$product->id])->first();
            $product->count = $productCount - $orderCount;
            $product->update();
        }

        $email = Auth::check() ? Auth::user()->email : $request->email;
        $name = Auth::check() ? Auth::user()->name : $request->name;

        Mail::to($email)->send(new OrderSuccess($order, $name));

        return redirect()->route('home');
    }

    /**
     * @param $product_id
     * @return \Illuminate\Http\RedirectResponse
     *
     * $order_id         Выбраные товары
     * $order            Поле заявки на выбраные товары     [ id | status | name | phone | created_at | updated|at ]
     * $pivotRow         Поле сводной таблицы               [ order_id | product_id | count | created_at | updated_at ]
     *
     * contains()       laravel | проверка на наличие
     * attach()         laravel | добавить
     *
     */
    public function basketAdd($product_id)
    {
        $productCount = Product::find($product_id)->count;
        $product = Product::find($product_id);

        //заказ по счету
        $order_id = session('order_id');
        //если сессия пустая
        if( is_null($order_id) )
        {
            $order = Order::create();
            session(['order_id' => $order->id]);
        }
        else
        {
            $order = Order::find($order_id);
        }
        if($order->products->contains($product_id))
        {
            $pivotRow = $order->products()->where('product_id' , $product_id)->first()->pivot;

            if($productCount > $pivotRow->count)
            {
                $pivotRow->count++;
                session()->flash('success', 'Добавлен товар: ' . $product->name );
            }
            else
            {
                $pivotRow->count;
                session()->flash('error', 'Количество товара '. $product->name .' только ' . $productCount . ' едениц(ы)'   );
            };

            $pivotRow->update();

        }else
        {
            $order->products()->attach($product_id);
        }

        //используется редирект чтобы при обновлении стр. не добавлялось доп поле
        return redirect()->route('basket');
    }

    /**
     * @param $product_id
     * @return \Illuminate\Http\RedirectResponse
     *
     * $order_id         Выбраные товары
     * $order            Поле заявки на выбраные товары     [ id | status | name | phone | created_at | updated|at ]
     * $pivotRow         Поле сводной таблицы               [ order_id | product_id | count | created_at | updated_at ]
     *
     * contains()       laravel | проверка на наличие
     * detach()         laravel | удалить/убрать
     *
     */
    public function basketDel($product_id)
    {
        $order_id = session('order_id');
        $order_id = session('order_id');
        if( is_null($order_id) )
        {
            //используется редирект чтобы при обновлении стр. не добавлялось доп поле
            return redirect()->route('basket');
        }

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

        $product = Product::find($product_id);

        session()->flash('error', 'Ты убрал ' . $product->name . ' (шт.)' );

        //используется редирект чтобы при обновлении стр. не добавлялось доп поле
        return redirect()->route('basket');
    }

}
