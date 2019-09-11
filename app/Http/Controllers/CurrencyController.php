<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Currency\CreateRequest;
use App\Http\Requests\Currency\UpdateRequest;
use App\Currency;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies=Currency::all();
        $status = [
            '1'    => 'Active',
            '2'  => 'Inactive',
            '3' => 'Suspended'
        ];

        return view('pages.currency.index', compact('currencies', 'status')); 
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
    public function store(CreateRequest $request)
    {
        $data = $request->all();         
        $currency = Currency::create($data);
        return response()->json(['message'=>'Moneda registrada correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        return response()->json($currency);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return response()->json($currency);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $currency = Currency::find($id);
        $data = $request->all();
        $currency->update($data);
        $currency->save();
        return response()->json(['message'=>'Moneda actualizada correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currency = Currency::find($id);
        $currency->delete();
        return response()->json(['message'=>'Moneda eleiminada correctamente']);
    }
}
