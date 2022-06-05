<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
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

Route::get('/', function () {
    return view('index');
});

// Route::middleware('auth')->group( function() {
//     Route::get('/back_shop')->name('back_shop');
// });


Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shopSearch', [ShopController::class, 'searchType']);


Route::get('/shop_content/{id}', [ShopController::class, 'show'])->name('shop_content');


Route::get('/reserve', function () {
    return view('reserve');
})->name('reserve');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::middleware(['auth', 'back'])->group(function () {

    Route::get('/back_reserve', function () {
        return view('back_reserve');
    });

    Route::get('/back_shop', function () {
        return view('back_shop');
    });
});
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');



    Route::get('/member_a', function () {
        return view('member_a');
    });

    Route::get('/member', function () {
        return view('member');
    });


    Route::get('/car', function () {
        return view('car');
    })->name('car');

    Route::get('/order_record', function () {
        return view('order_record');
    })->name('order_record');

    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');
});



require __DIR__ . '/auth.php';
