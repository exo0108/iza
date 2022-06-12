<?php

namespace App\Http\Services;

use App\Models\Order;
use App\Models\User;

class OrderService
{
    public function getAllOrder()
    {
        // $orders = Order::orderBy('status')->get();
        // return $orders;
        return Order::get();
    }

    // https://docfunc.com/posts/52/%E9%81%BF%E5%85%8D-laravel-orm-%E7%9A%84-n1-%E5%95%8F%E9%A1%8C-post
    public function search($phone)
    {
        $users = User::where('phone', 'like', '%'.$phone.'%')->with('orders')->get();
        $orders = collect();
        foreach($users as $user){
            // $orders = Order::where('created_at', 'like', '%'.$date.'%')->get();
            $orders = $orders->merge($user->orders);
            // dd($user->orders);
        }
        return $orders;
    }

    // public function searchByDate($date)
    // {
    //     $orders = Order::where('created_at', 'like', '%'.$date.'%')->get();
    //     return $orders;
    // }
}
