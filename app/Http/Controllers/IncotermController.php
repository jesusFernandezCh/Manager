<?php

namespace App\Http\Controllers;
use App\Incoterm;
use Illuminate\Http\Request;
use Session;
use Redirect;

class IncotermController extends Controller
{
    private $incoterm;

    public function __construct(Incoterm $incoterm)
    {
      $this->incoterm = $incoterm;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $incoterms = $this->incoterm->all();
      return view('pages.incoterm.index',compact('incoterms'));
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
      $this->incoterm->create($request->all());
      Session::flash('message-success',' Incoterm '. $request->name.' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Incoterm $incoterm)
    {
      return view('pages.incoterm.edit',compact('incoterm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $incoterm = $this->incoterm->find($id);
        $incoterm->update($request->all());
        $incoterm->save();
        Session::flash('message-success',' Incoterm '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incoterm $incoterm)
    {
        $incoterm->delete();
        Session::flash('message-success',' Incoterm '. $incoterm->name.' eliminado correctamente.');
    }
}
