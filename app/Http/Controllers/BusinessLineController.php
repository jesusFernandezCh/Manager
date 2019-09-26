<?php

namespace App\Http\Controllers;

use App\BusinessLine as Bussines;
use Illuminate\Http\Request;
use App\Http\Requests\BusinessLine\businessLineRequest;
use Session;

class BusinessLineController extends Controller
{
    private $business;

    /**
     * [__construct description]
     * @param Bussines $stmt [description]
     */
    public function __construct(Bussines $stmt)
    {
        $this->business = $stmt;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin      = true;
        $topMenu    = 'pages.operation.topMenu';
        $businesses = $this->business->all();
        return view('pages.operation.businessLine.index',compact('businesses','admin','topMenu'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(businessLineRequest $request)
    {
        $this->business->create($request->all());
        Session::flash('message-success',' Business Line '. $request['name'].' creado correctamente.');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bussines_line  $bussines_line
     * @return \Illuminate\Http\Response
     */
    public function edit(Bussines $business)
    {
        return view('pages.operation.businessLine.edit',compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bussines_line  $bussines_line
     * @return \Illuminate\Http\Response
     */
    public function update(businessLineRequest $request, Bussines $business)
    {
        $business->update($request->all());
        $business->save();
        Session::flash('message-success',' Business Line '. $request['name'].' actualizado correctamente.');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bussines_line  $bussines_line
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bussines $business)
    {
        $business->delete();
        Session::flash('message-success',' Business Line '. $business->name .' eliminado correctamente.');      
    }
}
