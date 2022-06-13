<?php

namespace App\Http\Services;

use App\Models\Reservation;
use App\Models\Cases;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ReserveService
{
    public function create($request)
    {


        $case = Cases::where('id', $request->id)->first();
        $store = Cases::where('id', $request->id)->first();
        $user = Auth::user();
        $result = Reservation::create(
            [
                'memberID' => $user->id,
                'storeID' =>  $store,
                'caseID' =>  $case,
                'date' => $request->date,
                'period' => $request->period,
                'status' => $request->status,
            ]
        );
        return $result;
    }

    public function indexReserve()
    {
    }


    public function getAllreservation()
    {

        $reservation = DB::table('reservations')
            ->join('stores', 'stores.id', '=', 'reservations.storeID')
            ->join('users', 'users.id', '=', 'reservations.memberID')
            ->join('cases', 'cases.id', '=', 'reservations.caseID')
            ->select('reservations.id', 'users.name as userName', 'stores.name as storeName', 'reservations.date', 'reservations.period', 'cases.name as caseName')
            ->get();

        return  $reservation;
    }

    public function deleteReservation($id)
    {
        $result = Reservation::where('id', $id)->delete();
        return $result;
    }



    public function search($name)
    {

        $reservations = DB::table('reservations')
            ->join('stores', 'stores.id', '=', 'reservations.storeID')
            ->join('users', 'users.id', '=', 'reservations.memberID')
            ->join('cases', 'cases.id', '=', 'reservations.caseID')
            ->select('reservations.id', 'users.name as userName', 'stores.name as storeName', 'reservations.date', 'reservations.period', 'cases.name as caseName')
            ->where('users.name',  'like', '%' . $name . '%')
            ->get();

        return $reservations;
    }
}
