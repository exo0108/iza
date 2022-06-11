<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct(
        CartService $service
    ) {
        $this->service = $service;
    }

    public function store(Request $request, $id)
    {

        $Cart = $this->service->CreateCart($request, $id);

        return redirect()->route('shop_content', $id);
    }

    public function index()
    {

        $Cart = $this->service->indexCart();


        return view('car', [
            'Cart' => $Cart,

        ]);
    }

    public function destroy($id)
    {
        $deleteCart = $this->service->deleteCart($id);
        if (!$deleteCart) {
            return response()->json(['status' => "刪除失敗"], 400);
        }
        return redirect()->route('car', $id);
    }
}
