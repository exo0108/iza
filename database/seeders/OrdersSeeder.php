<?php

namespace Database\Seeders;
use App\Models\Order;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Order = Order::create([
            'payWay' => "貨到付款",
            'total' => 1388,
            'status' => "配送中",
            'memberID' => 2,
        ]);

        $Order = Order::create([
            'payWay' => "貨到付款",
            'total' => 1230,
            'status' => "配送中",
            'memberID' => 1,
        ]);

        $Order = Order::create([
            'payWay' => "貨到付款",
            'total' => 1049,
            'status' => "已送達",
            'memberID' => 2,
        ]);

        $Order = Order::create([
            'payWay' => "貨到付款",
            'total' => 740,
            'status' => "配送中",
            'memberID' => 1,
        ]);

        $Order = Order::create([
            'payWay' => "貨到付款",
            'total' => 1745,
            'status' => "配送中",
            'memberID' => 2,
        ]);

        $Order = Order::create([
            'payWay' => "貨到付款",
            'total' => 600,
            'status' => "已送達",
            'memberID' => 3,
        ]);
    }
}
