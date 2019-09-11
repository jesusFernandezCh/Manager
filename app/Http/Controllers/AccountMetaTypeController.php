<?php

namespace App\Http\Controllers;

use App\AccountMetaType as MetaType;
use Illuminate\Http\Request;
use Session;
use Redirect;

class AccountMetaTypeController extends Controller
{
    private $metatype;

    public function __construct(metatype $metatype)
    {
      $this->metatype = $metatype;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metatypes = $this->metatype->all();
        return view('pages.account.accountMetaType.index', compact('metatypes'));
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
        $this->metatype->create($request->all());
        Session::flash('message-success',' Metatype '. $request->name.' creado correctamente.');
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
    public function edit($id)
    {
        $metatype = $this->metatype->find($id);
        return view('pages.account.accountMetaType.edit',compact('metatype'));
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
        $metatype = $this->metatype->find($id);
        $metatype->update($request->all());
        $metatype->save();
        Session::flash('message-success',' Metatype '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metatype = $this->metatype->find($id);
        $metatype->delete();
        Session::flash('message-success',' Metatype '. $metatype->name.' eliminado correctamente.');
    }
}
