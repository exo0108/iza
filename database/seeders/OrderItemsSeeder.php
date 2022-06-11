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
            'orderID' => 1,
            'goodsID' => 4,
            'amount' => 2,
            'total' => 500,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 1,
            'goodsID' => 21,
            'amount' => 1,
            'total' => 450,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 1,
            'goodsID' => 13,
            'amount' => 1,
            'total' => 280,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 2,
            'goodsID' => 14,
            'amount' => 1,
            'total' => 630,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 2,
            'goodsID' => 21,
            'amount' => 1,
            'total' => 419,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 3,
            'goodsID' => 9,
            'amount' => 2,
            'total' => 740,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 4,
            'goodsID' => 1,
            'amount' => 2,
            'total' => 120,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 4,
            'goodsID' => 7,
            'amount' => 1,
            'total' => 550,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 4,
            'goodsID' => 5,
            'amount' => 1,
            'total' => 315,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 4,
            'goodsID' => 19,
            'amount' => 1,
            'total' => 370,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 4,
            'goodsID' => 10,
            'amount' => 1,
            'total' => 270,
        ]);

        $OrderItems = OrderItem::create([
            'orderID' => 5,
            'goodsID' => 21,
            'amount' => 5,
            'total' => 600,
        ]);
    }
}
