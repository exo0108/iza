<?php

namespace App\Http\Services;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function getAllOrder()
    {
        // $orders = Order::orderBy('status')->get();
        // return $orders;
        return Order::get();
    }

    public function getPersonalOrder()
    {
        return Auth::user()->orders;
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

    public function backSearch($phone, $date)
    {
        $orders = Order::join('users', 'orders.memberID', '=', 'users.id')
                        ->select('orders.*')
                        ->where('users.phone', 'like', '%' . $phone . '%')
                        ->where('orders.created_at',  'like', '%' . $date . '%')
                        ->get();
        // dd($orders);
        return $orders;
    }

    public function arrive($id)
    {
        $result = Order::where('id', $id)->update(
            [
                'status' => '已送達'
            ]
        );
        return $result;
    }
}
