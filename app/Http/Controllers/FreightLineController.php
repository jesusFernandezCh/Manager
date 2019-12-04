<?php

namespace App\Http\Controllers;

use App\FreightLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FreightLineController extends Controller
{
    private $stmt;

    public function __construct(FreightLine $freightLine)
    {
        $this->stmt = $freightLine;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freightLines = FreightLine::all();
        return view('pages.operation.freightLines.index',compact('freightLines'));
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
        $this->stmt->create($request->all());
        Session::flash('message-success',' FreightLine '. $request['name'].' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FreightLine  $freightLine
     * @return \Illuminate\Http\Response
     */
    public function show(FreightLine $freightLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FreightLine  $freightLine
     * @return \Illuminate\Http\Response
     */
    public function edit(FreightLine $freightLine)
    {
        return response()->json($freightLine);       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FreightLine  $freightLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FreightLine $freightLine)
    {
        $freightLine->update($request->all());
        Session::flash('message-success',' FreightLine '. $request['name'].' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FreightLine  $freightLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(FreightLine $freightLine)
    {
        $freightLine->delete();
        Session::flash('message-success',' FreightLine '. $freightLine->shipping_line .' eliminado correctamente.');
    }
}
