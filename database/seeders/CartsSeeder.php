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
            'amount' => 1,
            'total' => 120,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 1,
            'goodsID' => 5,
            'amount' => 1,
            'total' => 315,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 1,
            'goodsID' => 23,
            'amount' => 3,
            'total' => 360,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 2,
            'goodsID' => 12,
            'amount' => 1,
            'total' => 430,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 2,
            'goodsID' => 1,
            'amount' => 6,
            'total' => 720,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 3,
            'goodsID' => 1,
            'amount' => 1,
            'total' => 120,
        ]);
    }
}
