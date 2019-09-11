<?php

namespace App\Http\Controllers;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Requests\Country\countryRequest;
use Session;
use Redirect;

class CountryController extends Controller
{
  private $country;

  public function __construct(Country $country)
  {
      $this->country = $country;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = $this->country->all();
        return view('pages.country_ports.country.index',compact('countries'));
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
    public function store(countryRequest $request)
    {
        $this->country->create($request->all());
        Session::flash('message-success',' Country '. $request->name.' creado correctamente.');
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
    public function edit(Country $country)
    {
      return view('pages.country_ports.country.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(countryRequest $request, $id)
    {
        $country = $this->country->find($id);
        $country->update($request->all());
        $country->save();
        Session::flash('message-success',' Country '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
      $country->delete();
      Session::flash('message-success',' Country '. $country->name.' eliminado correctamente.');
    }
}
