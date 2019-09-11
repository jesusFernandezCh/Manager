<?php

namespace App\Http\Controllers;

use App\ProfitCenter;
use Illuminate\Http\Request;
use Session;

class ProfitCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = [
            'active'    => 'Active',
            'inactive'  => 'Inactive',
        ];
        $profits = ProfitCenter::All();
        return view('pages.profitCenter.index',compact('status','profits'));
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
        ProfitCenter::Create($request->all());
        return response()->json(['message'=>'Profit Center Registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProfitCenters  $profitCenters
     * @return \Illuminate\Http\Response
     */
    public function show(ProfitCenter $profitCenters)
    {
        return response()->json($profitCenters);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfitCenters  $profitCenters
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profit = ProfitCenter::find($id);
        return response()->json($profit);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfitCenters  $profitCenters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profit = ProfitCenter::find($id);
        $profit->update($request->all());
        $profit->save();
        return response()->json(['message'=>'Profit Center actualizado correctamente']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfitCenters  $profitCenters
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfitCenter $profitCenter)
    {
        $profitCenter->delete();
        Session::flash('message-success',' Profit Center '. $profitCenter->name.' eliminado correctamente.');
    }
}
