<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CasesController;
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

Route::get('/index', function () {
    return view('index');
})->name('index');



Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shopSearch', [ShopController::class, 'searchType']);
Route::get('/shop_content/{id}', [ShopController::class, 'show'])->name('shop_content');

Route::get('/reserve', [CasesController::class, 'index'])->name('reserve');

Route::post('/reserve/add', [ReserveController::class, 'store'])->name('AddToReserve');

Route::middleware(['auth', 'back'])->group(function () {

    Route::get('/back_reserve', [ReserveController::class, 'back_reservation',])->name('back_reserve');
    Route::get('/reserve_search', [ReserveController::class, 'reserve_search',])->name('reserve_search');
    Route::delete('/back_reserve/deleteReservation/{id}', [ReserveController::class, 'destroy'])->name('deleteReservation');

    Route::get('/back_member', [MemberController::class, 'back_member',])->name('back_member');
    Route::get('/member_search', [MemberController::class, 'member_search',])->name('member_search');

    Route::get('/back_checkout', [OrderController::class, 'back_order'])->name('back_checkout');
    Route::get('/back_checkout_search', [OrderController::class, 'back_order_search',])->name('back_checkout_search');
    Route::post('/back_checkout_edit/{id}', [OrderController::class, 'back_order_edit',])->name('back_checkout_edit');
    Route::get('/back_checkout/handle/{id}', [OrderController::class, 'handle'])->name('back_checkout.handle');


    Route::get('back_program', [CasesController::class, 'back_index'])->name('back_program');
    Route::post('back_program', [CasesController::class, 'update',]);
    Route::post('back_program/add/{id}', [CasesController::class, 'store',])->name('AddToProgram');
    Route::get('back_program/search', [CasesController::class, 'case_search',])->name('programSearch');
    Route::delete('/back_program/deleteCase/{id}', [CasesController::class, 'destroy'])->name('deleteCase');

    Route::post('back_shop', [ShopController::class, 'update']);
    Route::get('/back_shop', [ShopController::class, 'editshop'])->name('back_shop');
    Route::get('/shop_search', [ShopController::class, 'shop_search'])->name('shop_search');
    Route::post('/back_shop/add/{id}', [ShopController::class, 'store'])->name('AddToShop');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');

    Route::get('/member_a', [MemberController::class, 'index'])->name('member_a');
    Route::get('/member', [MemberController::class, 'edit'])->name('member');
    Route::post('member', [MemberController::class, 'update'])->name('membr_update');

    Route::get('car', [CartController::class, 'index'])->name('car');
    Route::post('car/add/{id}', [CartController::class, 'store'])->name('AddToCar');
    Route::delete('car/deleteCart/{id}', [CartController::class, 'destroy'])->name('deleteCart');

    Route::get('/order_record', [OrderController::class, 'front_order'])->name('order_record');
    Route::delete('/order_record/deleteFrontReservation/{id}', [ReserveController::class, 'front_destroy'])->name('deleteFrontReservation');
});
Route::get('haha', [MemberController::class, 'haha']);

// Route::apiResource('cases', CasesController::class);

require __DIR__ . '/auth.php';
