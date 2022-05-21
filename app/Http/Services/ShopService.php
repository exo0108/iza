<?php

namespace App\Http\Services;

use App\Models\Good;

class ShopService{ 
    public function get_goods(){
        return Good::get();
    }


    
}