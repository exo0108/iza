<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ShopService;
use App\Models\Goods;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{


    public function __construct(
        ShopService $service
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
        // $user = Auth::user();
        // dd($user,$user->name,123);
        $goods = $this->service->get_goods();
        
        $menuItem = ['電剪、針梳、指甲剪', '毛髮清潔、護膚保養', '口腔清潔', '耳朵清潔', '除臭液、除臭劑、清潔劑、香水'];
        // return view('shop')->with('goods', $goods, 'menuItem', $menu);
        return view('shop', [
            'goods' => $goods,
            'menuItem' => $menuItem
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $good = $this->service->get_good($id);

        return view('shop_content')->with('good', $good);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    public function searchType(Request $request)
    {
        $type = $request->input('type');
        $goods = $this->service->get_good_type($type);
        
        $menuItem = ['電剪、針梳、指甲剪', '毛髮清潔、護膚保養', '口腔清潔', '耳朵清潔', '除臭液、除臭劑、清潔劑、香水'];
        // dd($goods, $request->input('type'));

        return view('shop', [
            'goods' => $goods,
            'menuItem' => $menuItem
        ]);
    }
}
