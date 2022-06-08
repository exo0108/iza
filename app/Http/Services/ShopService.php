<?php

namespace App\Http\Services;

use App\Models\Good;
use Illuminate\Http\Request;


class ShopService{ 
    public function get_goods(){
        return Goods::get();
    }

    public function get_good($id){
        return Goods::find($id);
    }

    public function get_good_type($type){

        return Goods::query()->where('type', 'like', $type)->get();
        
    }

    public function updateShop( Request $request)
    {
      $result = Good::find($request->id)->update(
        [
        'name' => $request->name, 
        'price' => $request->price,
        
        ]
      );
      return $result;
    }
}