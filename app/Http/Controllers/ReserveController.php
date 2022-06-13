<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ReserveService;
use App\Http\Services\MemberService;

class ReserveController extends Controller
{

    public function __construct(
        ReserveService $service,
        MemberService $mservice
    ) {
        $this->service = $service;
        $this->mservice = $mservice;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserve = $this->service->create($request);

        return redirect()->route('reserve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteReservation = $this->service->deleteReservation($id);
        if (!$deleteReservation) {
            return response()->json(['status' => "刪除失敗"], 400);
        }
        return redirect()->route('back_reserve', $id);
    }

    public function reserve_search(Request $request)
    {
        $name = $request->name;
        $reservations = $this->service->search($name);
        return view('back_reserve', [
            'name' => $name,
            'reservations' => $reservations,
        ]);
    }

    public function back_reservation()
    {
        $reservations = $this->service->getAllreservation();
        return view('back_reserve', [
            'reservations' => $reservations,
        ]);
    }
}
