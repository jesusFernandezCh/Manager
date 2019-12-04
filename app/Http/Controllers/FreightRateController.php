<?php

namespace App\Http\Controllers;

use App\Account;
use App\Currency;
use App\FreightLine;
use App\FreightRate;
use App\Http\Requests\FreightRate\FreightRateRequest;
use App\Logunit;
use App\Port;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FreightRateController extends Controller
{
    private $stmt;
    private $forwarder;

    public function __construct(FreightRate $freightRate, Account $account)
    {
        $this->stmt         = $freightRate;
        $this->forwarder    = $account;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin          = false;
        $create         = true;
        $forwarders     = $this->forwarder->CustomPluck('Freight');
        $logUnits       = Logunit::get()->pluck('name', 'id')->prepend(__('Selected...'), '');
        $ports          = Port::get()->pluck('name', 'id')->prepend(__('Selected...'), '');
        $currencies     = Currency::get()->pluck('name', 'id')->prepend(__('Selected...'), '');
        $lines          = FreightLine::get()->pluck('shipping_line', 'id')->prepend(__('Selected...'), '');
        $freightRates   = $this->stmt->all();

        return view('pages.operation.freightRates.index',compact('admin','create','forwarders','logUnits','ports','currencies','lines','freightRates'));
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
    public function store(FreightRateRequest $request)
    {
        $this->stmt->create($request->all());
        Session::flash('message-success',' FreightRate creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FreightRate  $freightRate
     * @return \Illuminate\Http\Response
     */
    public function show(FreightRate $freightRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FreightRate  $freightRate
     * @return \Illuminate\Http\Response
     */
    public function edit(FreightRate $freightRate)
    {
        return response()->json($freightRate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FreightRate  $freightRate
     * @return \Illuminate\Http\Response
     */
    public function update(FreightRateRequest $request, FreightRate $freightRate)
    {
        $freightRate->update($request->all());
        Session::flash('message-success',' FreightRate actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FreightRate  $freightRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(FreightRate $freightRate)
    {
        $freightRate->delete();
        Session::flash('message-success',' FreightRate eliminado correctamente.');
    }
}
