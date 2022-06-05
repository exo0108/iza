<?php

namespace App\Http\Services;

use App\Models\Goods;

class ShopService{ 
    public function get_goods(){
        return Goods::get();
    }


    
}