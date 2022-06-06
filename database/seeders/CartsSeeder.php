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
        ]);
        
        $Cart = Cart::create([
            'memberID' => 1,
            'goodsID' => 5,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 1,
            'goodsID' => 23,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 2,
            'goodsID' => 12,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 2,
            'goodsID' => 1,
        ]);
        
        $Cart = Cart::create([
            'memberID' => 3,
            'goodsID' => 1,
        ]);
    }
}
