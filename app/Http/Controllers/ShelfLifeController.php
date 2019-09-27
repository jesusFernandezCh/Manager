<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShelfLife\CreateRequest;
use App\Http\Requests\ShelfLife\updateRequest;
use App\ShelfLife;
use Session;

class ShelfLifeController extends Controller
{
    private $shelf_life;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(ShelfLife $shelf_life)
    {
        $this->shelf_life = ShelfLife::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shelf_life = ShelfLife::all();
        return view('pages.shelf_life.index', compact('shelf_life'));
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
        $shelf_life = ShelfLife::create($data);
        Session::flash('message-success','Shelf Life creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ShelfLife $shelf_life)
    {
        return response()->json($shelf_life);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ShelfLife $shelf_life)
    {
        return response()->json($shelf_life);
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
        $shelf_life = ShelfLife::find($id);
        $data = $request->all();
        $shelf_life->update($data);
        $shelf_life->save();
        Session::flash('message-success','Shelf Life actualizado correctamente.');
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
