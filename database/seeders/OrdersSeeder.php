<?php

namespace Database\Seeders;
use App\Models\Orders;
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
        $Orders = Orders::create([
            'memberID' => 1,
            'payWay' => "貨到付款",
            'total' => 1230,
            'status' => "配送中",
        ]);

        $Orders = Orders::create([
            'memberID' => 2,
            'payWay' => "貨到付款",
            'total' => 1049,
            'status' => "已送達",
        ]);

        $Orders = Orders::create([
            'memberID' => 1,
            'payWay' => "貨到付款",
            'total' => 740,
            'status' => "配送中",
        ]);

        $Orders = Orders::create([
            'memberID' => 2,
            'payWay' => "貨到付款",
            'total' => 1625,
            'status' => "配送中",
        ]);

        $Orders = Orders::create([
            'memberID' => 3,
            'payWay' => "貨到付款",
            'total' => 600,
            'status' => "已送達",
        ]);
    }
}
