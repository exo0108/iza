<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MemberService
{
  public function users()
  {

    return Auth::user();
  }

  public function members(){
    return User::get();
}


  public function updateMember(Request $request)
  {
    $result = User::find($request->user()->id)->update(
      [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
      ]
    );
    return $result;
  }
}
