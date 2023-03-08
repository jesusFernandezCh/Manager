<?php

namespace App\Http\Controllers;

use App\MvConcept;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MvConceptController extends Controller
{
    private $stmt;

    public function __construct(MvConcept $MvConcept)
    {
        $this->stmt = $MvConcept;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mvConcepts = $this->stmt->all();
        return view('pages.payments.mvConcept.index',compact('mvConcepts'));
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
        $this->stmt->create($request->all());
        Session::flash('message-success',' Mv Concept creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MvConcept  $mvConcept
     * @return \Illuminate\Http\Response
     */
    public function show(MvConcept $mvConcept)
    {
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MvConcept  $mvConcept
     * @return \Illuminate\Http\Response
     */
    public function edit(MvConcept $mvConcept)
    {
        return response()->json($mvConcept);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MvConcept  $mvConcept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MvConcept $mvConcept)
    {
        $mvConcept->update($request->all());
        Session::flash('message-success',' Mv Concept actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MvConcept  $mvConcept
     * @return \Illuminate\Http\Response
     */
    public function destroy(MvConcept $mvConcept)
    {
        $mvConcept->delete();
        Session::flash('message-success',' Mv Concept eliminado correctamente.');
    }
}
