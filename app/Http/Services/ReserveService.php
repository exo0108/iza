<?php

namespace App\Http\Services;

use App\Models\Reservation;



class ReserveService{ 
    public function create($request)
    {
      $request->all();
  
      $result =Reservation::create(
        [
            'memberID' => $request->memberID,
            'caseID' => $request->caseID,
            'date' => $request->date,
            'period'=>$request->period,
            'status'=>$request->status,
        ]
      );
  
      return $result;
    }
}