<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\MemberService;



class MemberController extends Controller
{
    public function __construct(
        MemberService $service
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
        $member = $this->service->users();

        return view('member_a',[
            'member' => $member,

        ]);


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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $member = $this->service->users();

        return view('member',[
            'member' => $member,

        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request )
    {
        
        $result = $this->service->updateMember($request);
       
        return redirect()->route('member', ['result'=>$result]);
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
    
    public function back_member()
    {
        $member = $this->service->members();

        return view('back_member',[
            'member' => $member,

        ]);


    }
}
