<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\CaseService;
use App\Models\Reservation;

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
        return view('reserve', [

            'cases' => $cases,
            'stores' => $stores
        ]);
    }
    public function back_index()
    {
        $cases = $this->service->get_case();
        $hasCases = Reservation::select('caseID')->distinct()->get();
        $casesArray = array();
        foreach ($hasCases as $item) {
            array_push($casesArray, $item->caseID);
        }
        return view('back_program', [
            'cases' => $cases,
            'hasCases' => $casesArray,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $cases = $this->service->createCase($request, $id);

        return redirect()->route('back_program', $id);
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

        return view('back_program', [
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
    public function update(Request $request)
    {

        $result = $this->service->update_case($request);

        return redirect()->route('back_program', ['result' => $result]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCase = $this->service->deleteCase($id);
        if (!$deleteCase) {
            return response()->json(['status' => "刪除失敗"], 400);
        }
        return redirect()->route('back_program', $id);
    }

    public function case_search(Request $request)
    {
        $name = $request->name;
        $hasCases = Reservation::select('caseID')->distinct()->get();
        $casesArray = array();
        foreach ($hasCases as $item) {
            array_push($casesArray, $item->caseID);
        }
        $cases = $this->service->search($name);
        return view('back_program', [
            'name' => $name,
            'cases' => $cases,
            'hasCases' => $casesArray,
        ]);
    }
}
