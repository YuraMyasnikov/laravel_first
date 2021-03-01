<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\App;

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\BasketController;
    use App\Http\Controllers\RegistrationUserController;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\AdminCategoryController;
    use App\Http\Controllers\AdminProductController;
    use App\Http\Controllers\ResetController;
    use App\Http\Controllers\LocaleController;
    use App\Http\Controllers\AdminPropertyController;

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



    Route::name('user.')->group(function() {

    Route::get('/private', [AuthController::class, 'admin'])->middleware(['auth', 'adminchik'])->name
    ('private');

    Route::get('/show/{order?}', [AuthController::class, 'show'])->middleware(['auth',])->name
    ('show');

    Route::get('/cabinet', [AuthController::class, 'auth'])->middleware(['auth'])->name
    ('cabinet');

    Route::get('/login', function() {
        //если уже вошел то будет редирект
        if ( Auth::check() ) {
            $orders = \App\Models\Order::get();

            return redirect(route('user.private'), compact('orders'));
        }

        return view('Registration/login');

    })->name('login');
    Route::post('/login', [LoginController::class, 'enter'])->name('enter');

    Route::get('/registration', function() {
        if ( Auth::check() ) {
            return redirect()->route('user.private');
        }

        return view('Registration/registration');

    })->name('registration');
    Route::post('/registration', [RegistrationUserController::class, 'save'])->name('register');

    Route::get('/logout', function() {
        Auth::logout();

        return redirect()->route('home');
    })->name('logout');

    Route::post('/logout', function() {
        Auth::logout();

        return redirect()->route('home');
    })->name('out');

});

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
        Route::resource('admin/properties', AdminPropertyController::class);
        Route::resource('admin/categories', AdminCategoryController::class);
        Route::resource('admin/products', AdminProductController::class);
        Route::get('admin/order', [AuthController::class, 'show'])->name('show');
    });

    Route::middleware(['lang','currency'])->group(function (){
        Route::get('/', [HomeController::class, 'home'])->name('home');
        Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
        Route::get('local/{locale}' , [LocaleController::class, 'index'])->name('locale');
        Route::get('currency/{currency}' , [LocaleController::class, 'currency'])->name('currency');

        /**
         * Корзина
         */
        Route::group(['prefix' => 'basket'], function() {
            Route::middleware('empty_basket')->group(function() {
                Route::get('/', [BasketController::class, 'basket'])->name('basket');
                Route::get('/order', [BasketController::class, 'basketPlace'])->name('basketPlace');
                Route::post('/del/{product_id}', [BasketController::class, 'basketDel'])->name('basketDel');
                Route::post('/order', [BasketController::class, 'basketConfirm'])->name('basketConfirm');
            });
            Route::post('/add/{product_id}', [BasketController::class, 'basketAdd'])->name('basketAdd');
        });
        Route::get('/reset', [ResetController::class, 'reset'])->name('reset');
        Route::get('/{category}', [CategoryController::class, 'category'])->name('category');
        Route::get('/{category}/{product}', [CategoryController::class, 'product'])->name('product');
        Route::post('subscription/{product}',[CategoryController::class, 'subscripe'])->name('subscripe');
    });





