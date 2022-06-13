<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Good;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartService
{

    public function CreateCart($request, $id)
    {

        $good = Good::where('id', $request->id)->first();
        $user = Auth::user();
        $result = Cart::updateOrCreate(
            [
                'memberID' => $user->id,
                'goodsID' => $id,
            ],
            [
                'memberID' => $user->id,
                'goodsID' => $id,
                'count' => $request->count,
            ]
        );
        return   $result;
    }

    public function indexCart()
    {
        $menberid = Auth::user()->id;
        $cart = DB::table('carts')
            ->join('goods', 'goods.id', '=', 'carts.goodsID')
            ->select('carts.id', 'carts.memberID', 'goods.name', 'carts.amount', 'goods.price', 'goods.img')
            ->where('memberID',  $menberid)
            ->get();


        return  $cart;
    }

    public function deleteCart($id)
    {
        $result = Cart::where('id', $id)->delete();
        return $result;
    }
}
