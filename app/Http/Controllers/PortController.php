<?php

namespace App\Http\Controllers;
use App\Port;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Requests\Port\portRequest;
use Session;
use Redirect;

class PortController extends Controller
{
    private $port;
    private $countries;

    public function __construct(Port $port, Country $country)
    {
      $this->port       = $port;
      $this->countries  = $country->get()->where('active',1)->pluck('name','id'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ports     = $this->port->all();
      $countries = $this->countries;
      return view('pages.country_ports.port.index', compact('ports', 'countries'));
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
    public function store(portRequest $request)
    {
        $this->port->create($request->all());
        Session::flash('message-success',' Port '. $request->name.' creado correctamente.');
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
    public function edit(Port $port)
    {
        $countries = $this->countries;
        return view('pages.country_ports.port.edit',compact('port','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(portRequest $request, $id)
    {
        $port = $this->port->find($id);
        $port->update($request->all());
        $port->save();
        Session::flash('message-success',' Port '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Port $port)
    {
      $port->delete();
      Session::flash('message-success',' Port '. $port->name.' eliminado correctamente.');
    }
}
