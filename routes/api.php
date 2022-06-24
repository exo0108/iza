<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CasesController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('cases', [CasesController::class, 'index']);
// Route::post('cases', [CasesController::class, 'store']);
// Route::patch('cases', [CasesController::class, 'update']);

// Route::middleware('auth')->group(function () {
//     Route::patch('member/update', [MemberController::class, 'update'])->name('member.update');
// });
