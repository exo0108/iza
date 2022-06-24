<?php

namespace App\Http\Services;

use App\Models\OrderItem;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function getOrderItem($id)
    {
        $items = DB::table('orderitems')
                    ->join('orders', 'id', '=', 'orderitems.orderID')
                    ->join('goods', 'id', '=', 'orderitems.goodsID')
                    ->select('goods.name as goodsName', 'orderitems.amount', 'goods.price as goodsPrice')
                    ->where('orderID', '=', $id)
                    ->get();
        return $items;
    }
}