<?php

namespace Database\Seeders;

use App\Models\Cart;

use Illuminate\Database\Seeder;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Cart = Cart::create([
            'memberID' => 1,
            'goodsID' => 1,
            'count' => 2,
        ]);

        $Cart = Cart::create([
            'memberID' => 1,
            'goodsID' => 5,
            'count' => 6,
        ]);

        $Cart = Cart::create([
            'memberID' => 1,
            'goodsID' => 21,
            'count' => 2,
        ]);

        $Cart = Cart::create([
            'memberID' => 2,
            'goodsID' => 12,
            'count' => 4,
        ]);

        $Cart = Cart::create([
            'memberID' => 2,
            'goodsID' => 1,
            'count' => 2,
        ]);

        $Cart = Cart::create([
            'memberID' => 3,
            'goodsID' => 1,
            'count' => 5,
        ]);
    }
}
