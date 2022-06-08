<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MemberController;
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
    Route::get('/back_member', [MemberController ::class, 'back_member',])->name('back_member');
    Route::get('/member_search', [MemberController ::class, 'member_search',])->name('member_search');

    Route::get('/back_checkout', function () {
        return view('back_checkout');
    });
    Route::get('/back_program', function () {
        return view('back_program');
    });
    Route::post('back_shop', [ShopController::class, 'update']);
    Route::get('/back_shop', [ShopController::class, 'editshop'])->name('back_shop');
    Route::get('/shop_search', [ShopController ::class, 'shop_search',])->name('shop_search');
});
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');


    Route::get('/member_a', [MemberController::class, 'index'])->name('member_a');
    // Route::get('/member_a', function () {
    //     return view('member_a');
    // });
    
    Route::post('member', [MemberController::class, 'update'])->name('membr_update');

    Route::get('/member', [MemberController::class, 'edit'])->name('member');

 
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
Route::get('haha', [MemberController::class, 'haha']);



require __DIR__ . '/auth.php';
