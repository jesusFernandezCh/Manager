<?php

namespace App\Http\Controllers;

use App\MvType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MvTypeController extends Controller
{
    private $stmt;

    public function __construct(MvType $mvType)
    {
        $this->stmt = $mvType;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mvTypes = $this->stmt->all();
        return view('pages.payments.mvType.index',compact('mvTypes'));
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
        Session::flash('message-success',' Mv Type creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MvType  $mvType
     * @return \Illuminate\Http\Response
     */
    public function show(MvType $mvType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MvType  $mvType
     * @return \Illuminate\Http\Response
     */
    public function edit(MvType $mvType)
    {
        return response()->json($mvType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MvType  $mvType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MvType $mvType)
    {
        $mvType->update($request->all());
        Session::flash('message-success',' Mv Type actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MvType  $mvType
     * @return \Illuminate\Http\Response
     */
    public function destroy(MvType $mvType)
    {
        $mvType->delete();
        Session::flash('message-success',' Mv Type eliminado correctamente.');
    }
    
}
