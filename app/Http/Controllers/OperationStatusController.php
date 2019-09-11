<?php

namespace App\Http\Controllers;

use App\OperationStatus as Status;
use Illuminate\Http\Request;
use App\Http\Requests\StatusOperation\RequestStatus;
use Session;

class OperationStatusController extends Controller
{
    private $status;

    /**
     * class consturct
     * @param Status $stmt [description]
     */
    public function __construct(Status $stmt)
    {
        $this->status = $stmt; 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = $this->status->all();
        return view('pages.operation.status.index',compact('status'));
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
    public function store(RequestStatus $request)
    {
        $this->status->create($request->all()); 
        Session::flash('message-success',' Status '. $request['name'].' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OperationState  $operationState
     * @return \Illuminate\Http\Response
     */
    public function show(Status $operationState)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OperationState  $operationState
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('pages.operation.status.edit',compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OperationState  $operationState
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStatus $request, Status $status)
    {
        $status->update($request->all());
        Session::flash('message-success',' Status '. $request['name'].' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OperationState  $operationState
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();
        Session::flash('message-success',' Status '. $status->name.' eliminado correctamente.');
    }
}
