<?php

namespace Database\Seeders;

use App\Models\OrderItem;

use Illuminate\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $OrderItems = OrderItem::create([
            'amount' => 2,
            'total' => 500,
            'orderID' => 1,
            'goodsID' => 4,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 450,
            'orderID' => 1,
            'goodsID' => 21,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 280,
            'orderID' => 1,
            'goodsID' => 13,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 630,
            'orderID' => 2,
            'goodsID' => 14,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 419,
            'orderID' => 2,
            'goodsID' => 21,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 2,
            'total' => 740,
            'orderID' => 3,
            'goodsID' => 9,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 2,
            'total' => 120,
            'orderID' => 4,
            'goodsID' => 1,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 550,
            'orderID' => 4,
            'goodsID' => 7,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 315,
            'orderID' => 4,
            'goodsID' => 5,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 370,
            'orderID' => 4,
            'goodsID' => 19,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 1,
            'total' => 270,
            'orderID' => 4,
            'goodsID' => 10,
        ]);

        $OrderItems = OrderItem::create([
            'amount' => 5,
            'total' => 600,
            'orderID' => 5,
            'goodsID' => 21,
        ]);
    }
}
