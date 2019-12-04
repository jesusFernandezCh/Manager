<?php

namespace App\Http\Controllers;

use App\OrderPmtTerm;
use Illuminate\Http\Request;
use App\Http\Requests\OrderPmtTerm\orderPmtTermRequest;
use Session;

class OrderPmtTermController extends Controller
{
    private $OrderPmtTerm;

    public function __construct(OrderPmtTerm $stmt)
    {
        $this->orderPmtTerm = $stmt;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin      = true; 
        $orders     = $this->orderPmtTerm->all();
        $topMenu    = 'pages.operation.topMenu';
        return view('pages.operation.orderPmtTerm.index',compact('orders','topMenu','admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(orderPmtTermRequest $request)
    {
        $this->orderPmtTerm->create($request->all());
        Session::flash('message-success',' OrderPmtTerm '. $request['name'].' creado correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order_pmt_term  $order_pmt_term
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderPmtTerm $orderPmtTerm)
    {
        return view('pages.operation.orderPmtTerm.edit',compact('orderPmtTerm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order_pmt_term  $order_pmt_term
     * @return \Illuminate\Http\Response
     */
    public function update(orderPmtTermRequest $request, OrderPmtTerm $orderPmtTerm)
    {
        $request->all();
        $orderPmtTerm->update($request->all());
        Session::flash('message-success',' OrderPmtTerm '. $request['name'].' actualizado correctamente.');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order_pmt_term  $order_pmt_term
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderPmtTerm $orderPmtTerm)
    {
        $orderPmtTerm->delete();
        Session::flash('message-success',' OrderPmtTerm '. $orderPmtTerm->name .' eliminado correctamente.');
    }
}
