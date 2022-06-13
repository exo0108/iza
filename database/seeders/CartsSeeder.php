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
            'amount' => 2,
            'memberID' => 1,
            'goodsID' => 1,
        ]);

        $Cart = Cart::create([
            
            'amount' => 6,
            'memberID' => 1,
            'goodsID' => 5,
        ]);

        $Cart = Cart::create([            
            'amount' => 2,
            'memberID' => 1,
            'goodsID' => 21,
        ]);

        $Cart = Cart::create([            
            'amount' => 4,
            'memberID' => 2,
            'goodsID' => 12,
        ]);

        $Cart = Cart::create([            
            'amount' => 2,
            'memberID' => 2,
            'goodsID' => 1,
        ]);

        $Cart = Cart::create([            
            'amount' => 5,
            'memberID' => 3,
            'goodsID' => 1,
        ]);
    }
}
