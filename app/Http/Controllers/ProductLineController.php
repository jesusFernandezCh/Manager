<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductLine\CreateRequest;
use App\Http\Requests\ProductLine\updateRequest;
use App\ProductLine;
use Session;

class ProductLineController extends Controller
{
    private $product_line;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(ProductLine $product_line)
    {
        $this->product_line = ProductLine::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_line = ProductLine::all();
        return view('pages.product.product_line.index', compact('product_line'));
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
        $product_line = ProductLine::create($data);
        Session::flash('message-success','Product Line creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductLine $product_line)
    {
        return response()->json($product_line);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductLine $product_line)
    {
        return response()->json($product_line);
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
        $product_line = ProductLine::find($id);
        $data = $request->all();
        $product_line->update($data);
        $product_line->save();
        Session::flash('message-success','Product Line actualizado correctamente.');
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
