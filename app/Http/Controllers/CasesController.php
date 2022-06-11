<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\CaseService;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CaseService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        $cases = $this->service->get_case(); 
        $stores = $this->service->get_store();
        return view('reserve',[
            
            'cases'=>$cases,
            'stores'=>$stores
        ]);
    }
    public function back_index()
    {
        $cases = $this->service->get_case(); 
        return view('back_program',[
            'cases'=>$cases,
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
        //TODO
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //
    }

    public function edit()
    {
        $back_program = $this->service->updateCase();
        
        return view('back_program',[
            'back_program' => $back_program,

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
        
        $result = $this->service->updateCase($request);
        
        return redirect()->route('back_program', ['result'=>$result]);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCase = $this->case->deleteCase($id);
        
    }
}
