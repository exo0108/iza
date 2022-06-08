<?php

namespace App\Http\Services;

use App\Models\Cases;
use App\Models\Store;

class CaseService
{
  public function get_case(){
    return Cases::get();
  }

  public function get_store(){
    return Store::get();
  }

  public function createCase($request)
  {
    $request->all();

    $result = Cases::create(
      [
        'name' => $request->name,
        'price' => $request->price,
        'describe' => $request->describe
      ]
    );

    return $result;
  }

  public function update_case( Request $request)
    {
      $result = Cases::find($request->user()->id)->update(
        [
        'name' => $request->name, 
        'price' => $request->price,
        'describe' => $request->describe,
        ]
      );
      return $result;
    }
    public function deleteCase($id)
  {
    $result = Cases::where('id', $id)->delete();
    return $result;
  }
}