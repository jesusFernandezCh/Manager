<?php

namespace App\Http\Controllers;

use App\OperationShipTotal;
use Illuminate\Http\Request;

class OperationShipTotalController extends Controller
{
    private $stmt;

    public function __construct(OperationShipTotal $shipTotal)
    {
        $this->stmt = $shipTotal;
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operationShipTotal = $this->stmt->create($request->all());
        return $this->show($request->input('operation_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OperationShipTotal  $operationShipTotal
     * @return \Illuminate\Http\Response
     */
    public function show($operation_id)
    {
        $products = $this->stmt->all()->where('operation_id',$operation_id);
        return response()->json($products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OperationShipTotal  $operationShipTotal
     * @return \Illuminate\Http\Response
     */
    public function edit(OperationShipTotal $operationShipTotal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OperationShipTotal  $operationShipTotal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperationShipTotal $operationShipTotal)
    {
        $operationShipTotal->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OperationShipTotal  $operationShipTotal
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperationShipTotal $operationShipTotal)
    {
        $operationShipTotal->delete();
    }
}
