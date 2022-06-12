<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(
        OrderService $service
    ) {
        $this->service = $service;
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
        //
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
        //
    }

    public function back_order()
    {
        //
        $orders = $this->service->getAllOrder();
        // $dates = $this->service->getCreateDate();
        return view('back_checkout', [
            'orders' => $orders,
            // 'dates' => $dates,
        ]);
    }

    public function back_order_search(Request $request)
    {
        //
        $phone = $request->phone;
        $date = $request->date;
        $orders = $this->service->search($phone);

        // dd($orders);
        return view('back_checkout', [
            'phone' => $phone,
            'date' => $date,
            'orders' => $orders,
        ]);
    }
}
