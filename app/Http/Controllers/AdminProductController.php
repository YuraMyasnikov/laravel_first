<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AdminProductsRequest;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin/products/products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::get();
        return view('admin/products/productCreate',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminProductsRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image'))
        {
            $path = $request->file('image')->store('product');
            $params['image'] = $path;
        }

        ( isset($params['show'])) ? $params['show'] = 0 : $params['show'] = 1;
        Product::create($params);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $nameCategory =  function ($id)
        {
            $property = Category::where('id', $id)->first();
            return $property->name;
        };

        return view('admin/products/productShow', compact('product','nameCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('admin/products/productCreate',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(AdminProductsRequest $request, Product $product)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image'))
        {
            Storage::delete($product->image);
            $path = $request->file('image')->store('product');
            $params['image'] = $path;
        }
        foreach (['new','hit','sale'] as $name)
        {
          if ( isset( $params[$name]) && $params[$name] !== 1){
              $params[$name] = 0;
          }else{
              $params[$name] = 1;
          }


          if($product->show !== 1) {
              $product->show = 0;
          }
          else{
              $product->show = 1;
          }
        }


        $product->update($params);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }
}
