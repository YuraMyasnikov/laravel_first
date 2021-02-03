<?php


    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;

    use App\Models\Product;

    class HomeController extends Controller
    {
        public function home ()
        {
            $products = Product::all();
            return view('index', compact('products'));
        }

    }
