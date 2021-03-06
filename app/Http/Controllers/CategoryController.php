<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use App\Models\Category;
use App\Models\SubscripeProduct;
use App\Http\Requests\SubscribeMessageProduct;


class CategoryController extends Controller
{

    public function categories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function category ($property_code)
    {
        $property = Category::where('code', $property_code)->first();


        return view('category',compact('property'));
    }

    public function product ($property_code, $product_code=null)
    {
        $property = Category::where('code', $property_code)->first();
        $product = Product::withTrashed()->where('code',$product_code)->firstOrFail();
        return view('product',compact('product'));
    }

    public function subscripe (SubscribeMessageProduct $request, Product $product)
    {
        SubscripeProduct::create(
            [
                'email' => $request->email,
                'product_id' => $product->id,
            ]
        );

        return redirect()->back()->with('success','Вы получите оповещение при пополнении данного товара');
    }

}
