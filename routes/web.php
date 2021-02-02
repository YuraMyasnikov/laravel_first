<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
    Route::get('/{category}', [CategoryController::class, 'category'])->name('category');
    Route::get('/{category}/{product?}', [CategoryController::class, 'product'])->name('product');

   /* Route::get('/basket', [HomeController::class, 'basket'])->name('basket');
    Route::get('/basket/order', [HomeController::class, 'basketPlace'])->name('basketPlace');*/

