<?php

namespace App\Http\Controllers;

use App\OperationShip;
use App\Operation;
use App\AccountContact;
use Illuminate\Http\Request;

class OperationShipController extends Controller
{
    private $operationShip;
    private $operation;
    
    public function __construct(OperationShip $stmt, Operation $operation)
    {
        $this->operationShip = $stmt;
        $this->operation     = $operation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd($this->operationShip->supplier());
        $admin      = false;
        $create     = true; 
        $topMenu    = "pages.operation.topMenu";
        return view('pages.operation.operationShip.create',compact("topMenu","admin","create"));
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
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function show($operation_id)
    {
        $operation      = $this->operation->find($operation_id);
        $supplier       = $this->operationShip->Supplier($operation->supplier_id);
        $admin          = false;
        $create         = true; 
        $topMenu        = "pages.operation.topMenu";
        return view('pages.operation.operationShip.create',compact("topMenu","admin","create",'operation','supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function edit(operationShip $operationShip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, operationShip $operationShip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function destroy(operationShip $operationShip)
    {
        //
    }
}
