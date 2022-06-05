<?php

namespace App\Http\Services;

use App\Models\Goods;

class ShopService{ 
    public function get_goods(){
        return Goods::get();
    }

    public function get_good($id){
        return Good::find($id);
    }

    public function get_good_type($type){

        return Good::query()->where('type', 'like', $type)->get();
        
    }
}