<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use App\Models\Category;


class CategoryController extends Controller
{

    public function categories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function category ($category_code)
    {
        $category = Category::where('code', $category_code)->first();
        dd($category);
        return view('category',compact('category'));
    }



}
