<?php


    namespace App\ViewComposer;


    use Illuminate\View\View;
   use App\Models\Category;

    class CategoriesComposer
    {
        public function compose(View $view)
        {
            $categories = Category::get();

            //всем вьюхам есть выход на переменную
            $view->with('categories',$categories);
        }
    }
