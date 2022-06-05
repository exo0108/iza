<?php

namespace Database\Seeders;
use App\Models\Carts;

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
        $Carts = Carts::create([
            'memberID' => 1,
            'goodsID' => 1,
            'amount' => 1,
            'total' => 120,
        ]);
        
        $Carts = Carts::create([
            'memberID' => 1,
            'goodsID' => 5,
            'amount' => 1,
            'total' => 315,
        ]);
        
        $Carts = Carts::create([
            'memberID' => 1,
            'goodsID' => 23,
            'amount' => 3,
            'total' => 360,
        ]);
        
        $Carts = Carts::create([
            'memberID' => 2,
            'goodsID' => 12,
            'amount' => 1,
            'total' => 430,
        ]);
        
        $Carts = Carts::create([
            'memberID' => 2,
            'goodsID' => 1,
            'amount' => 6,
            'total' => 720,
        ]);
        
        $Carts = Carts::create([
            'memberID' => 3,
            'goodsID' => 1,
            'amount' => 1,
            'total' => 120,
        ]);
    }
}
