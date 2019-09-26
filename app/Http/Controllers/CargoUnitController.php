<?php

namespace App\Http\Controllers;

use App\CargoUnit;
use Illuminate\Http\Request;
use App\Http\Requests\CargoUnits\cargoUnitsRequest;
use Session;

class CargoUnitController extends Controller
{
    private $cargoUnit;

    /**
     * [__construct description]
     * @param Bussines $stmt [description]
     */
    public function __construct(CargoUnit $stmt)
    {
        $this->cargoUnit = $stmt;
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
        $cargoUnits = $this->cargoUnit->all();
        return view('pages.operation.cargoUnit.index',compact('cargoUnits','admin','topMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cargoUnitsRequest $request)
    {
        $this->cargoUnit->create($request->all());
        Session::flash('message-success',' Cargo Unit '. $request['name'].' creado correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cargo_unit  $cargo_unit
     * @return \Illuminate\Http\Response
     */
    public function edit(CargoUnit $cargoUnit)
    {
        return view('pages.operation.cargoUnit.edit',compact('cargoUnit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cargo_unit  $cargo_unit
     * @return \Illuminate\Http\Response
     */
    public function update(cargoUnitsRequest $request, CargoUnit $cargoUnit)
    {
        $cargoUnit->update($request->all());
        $cargoUnit->save();
        Session::flash('message-success',' Cargo Unit '. $request['name'].' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cargo_unit  $cargo_unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CargoUnit $cargoUnit)
    {
        $cargoUnit->delete();
        Session::flash('message-success',' Cargo Unit '. $cargoUnit->name .' elminado correctamente.');
    }
}
