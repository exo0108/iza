<?php

namespace App\Http\Services;

use App\Models\Good;

class ShopService{ 
    public function get_goods(){
        return Good::get();
    }

    public function get_good($id){
        return Good::find($id);
    }

    public function get_good_type($type){

        return Good::query()->where('type', 'like', $type)->get();
        
    }
}