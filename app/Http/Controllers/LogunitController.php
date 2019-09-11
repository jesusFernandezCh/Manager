<?php

namespace App\Http\Controllers;

use App\Logunit;
use Illuminate\Http\Request;
use Session;
use Redirect;

class LogunitController extends Controller
{
    private $logunit;

    public function __construct(Logunit $logunit)
    {
      $this->logunit = $logunit;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $logunits = $this->logunit->all();
      return view('pages.logunit.index',compact('logunits'));
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
        $this->logunit->create($request->all());
        Session::flash('message-success',' Logunit '. $request->name.' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logunit  $logunit
     * @return \Illuminate\Http\Response
     */
    public function show(Logunit $logunit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logunit  $logunit
     * @return \Illuminate\Http\Response
     */
    public function edit(Logunit $logunit)
    {
        return view('pages.logunit.edit',compact('logunit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logunit  $logunit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $logunit = $this->logunit->find($id);
        $logunit->update($request->all());
        $logunit->save();
        Session::flash('message-success',' Logunit '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logunit  $logunit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logunit $logunit)
    {
      $logunit->delete();
      Session::flash('message-success',' Logunit '. $logunit->name.' eliminado correctamente.');
    }
}
