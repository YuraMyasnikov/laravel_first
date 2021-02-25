<?php


namespace App\Http\Controllers;

use App\Http\Requests\ProductFilterRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Product;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function home (ProductFilterRequest $request)
    {

        $productsQuery = Product::where('show',1)->with('category');

        if($request->price_from)
        {
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if($request->price_to)
        {
            $productsQuery->where('price', '<=', $request->price_to);
        }
        foreach (['new','hit','sale'] as $fieldCheck)
        {
            if($request->$fieldCheck)
            {
                $productsQuery->$fieldCheck();
            }
        }
                                                        /*
                                                         * withPath описание данного хелпера или кто это я не нашел
                                                         * withPath думаю в следующей страницы погинации строит url
                                                         * getQueryString() |&page=3| показывает на какой странице пагинации
                                                        */
        $products = $productsQuery->paginate(9)->withPath('?'. $request->getQueryString());
        return view('index', compact('products','request'));
    }


}
