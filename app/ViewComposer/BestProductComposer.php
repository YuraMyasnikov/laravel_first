<?php


    namespace App\ViewComposer;


    use Illuminate\View\View;
    use App\Models\Order;
    use App\Models\Product;


    class BestProductComposer
    {
        public function compose(View $view)
        {


            $bestProductsIds = Order::get()->map->products->flatten()->map->pivot->mapToGroups(function($pivot){
                return [$pivot->product_id => $pivot->count];
            })->map->sum()->sortByDesc(null)->take(4)->keys()->toArray();

            $bestProducts = Product::whereIn('id' , $bestProductsIds)->get();

            //всем вьюхам есть выход на переменную
            $view->with('bestProducts',$bestProducts);
        }
    }
