<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\OrderService;
use App\Http\Services\ReserveService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    protected $reserveService;

    public function __construct(
        OrderService $service,
        ReserveService $reserveService,
    ) {
        $this->service = $service;
        $this->reserveService = $reserveService;
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

    public function front_order()
    {
        //
        $orders = $this->service->getPersonalOrder();
        $reservations = $this->reserveService->getPersonalReservation();

        

        return view('order_record', [
            'orders' => $orders,
            'reservations' => $reservations,
        ]);
    }

    public function back_order()
    {
        //
        $orders = $this->service->getAllOrder();
        $orderitems = DB::table('order_items')
            ->join('orders', 'orders.id', '=', 'order_items.orderID')
            ->join('goods', 'goods.id', '=', 'order_items.goodsID')
            ->select('order_items.orderID', 'goods.name as goodsName', 'order_items.amount', 'goods.price as goodsPrice')
            ->get();
        return view('back_checkout', [
            'orders' => $orders,
            'orderitems' => $orderitems,
        ]);
    }



    public function back_order_search(Request $request)
    {
        //
        $phone = $request->phone;
        $date = $request->date;
        $orders = $this->service->backSearch($phone, $date);

        // dd($orders);
        return view('back_checkout', [
            'phone' => $phone,
            'date' => $date,
            'orders' => $orders,
        ]);
    }

    public function back_order_edit($id)
    {
        $orders = $this->service->arrive($id);
        // dd($orders);
        return redirect()->route('back_checkout');
    }

    public function handle(Request $request, $id)
    {
        dd(12, $id);
    }
}
