<?php

namespace App\Http\Services;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function getAllOrder()
    {
        // $orders = Order::orderBy('status')->get();
        // return $orders;
        return Order::get();
    }

    // https://docfunc.com/posts/52/%E9%81%BF%E5%85%8D-laravel-orm-%E7%9A%84-n1-%E5%95%8F%E9%A1%8C-post
    // public function search($phone)
    // {
    //     $users = User::where('phone', 'like', '%'.$phone.'%')->with('orders')->get();
    //     $orders = collect();
    //     foreach($users as $user){
    //         $orders = $orders->merge($user->orders);
    //         // dd($user->orders);
    //     }
    //     return $orders;
    // }

    public function search($phone, $date)
    {
        $orders = DB::table('orders')
                    ->join('users', 'users.id', '=', 'orders.memberID')
                    ->select('orders.id', 'orders.created_at', 'users.name as userName', 'users.phone as userPhone', 'orders.payWay', 'orders.total', 'orders.status')
                    ->where('users.phone', 'like', '%'.$phone.'%')
                    ->where('orders.created_at',  'like', '%'.$date.'%')
                    ->get();
        return $orders;
    }
}
