<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Currier\CreateRequest;
use App\Http\Requests\Currier\updateRequest;
use App\Currier;
use Session;

class CurrierController extends Controller
{
    private $currier;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(Currier $currier)
    {
        $this->currier = Currier::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currier = Currier::all();
        return view('pages.currier.index', compact('currier'));
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
        $currier = Currier::create($data);
        Session::flash('message-success','Currier creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Currier $currier)
    {
        return response()->json($currier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Currier $currier)
    {
        return response()->json($currier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateRequest $request, $id)
    {
        $currier = Currier::find($id);
        $data = $request->all();
        $currier->update($data);
        $currier->save();
        Session::flash('message-success','Currier actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
