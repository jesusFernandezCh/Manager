<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductGen\CreateRequest;
use App\Http\Requests\ProductGen\updateRequest;
use App\ProductGen;
use App\ProductLine;
use Session;


class ProductGenController extends Controller
{
    private $product_gen;
    private $product_line;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(ProductGen $product_gen)
    {
        $this->product_gen = ProductGen::all();
        $this->product_line = ProductLine::get()->pluck('line', 'id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_gen = ProductGen::all();
        $product_line = $this->product_line->all();
        
        $var = __('Selected..');
        $product_line = array('' => $var) + $product_line;
        return view('pages.product.product_gen.index', compact('product_gen','product_line'));
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
        $product_gen = ProductGen::create($data);
        Session::flash('message-success','Product Gender creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductGen $product_gen)
    {
        return response()->json($product_gen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductGen $product_gen)
    {
        return response()->json($product_gen);
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
        $product_gen = ProductGen::find($id);
        $data = $request->all();
        $product_gen->update($data);
        $product_gen->save();
        Session::flash('message-success','Product Gender actualizado correctamente.');
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
