<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocStatus\CreateRequest;
use App\Http\Requests\DocStatus\updateRequest;
use App\DocStatus;
use Session;

class DocStatusController extends Controller
{
    private $doc_status;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(DocStatus $doc_status)
    {
        $this->doc_status = DocStatus::all();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc_status = DocStatus::all();

        return view('pages.documents.doc_status.index',compact('doc_status')); 
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
        $product_line = DocStatus::create($data);
        Session::flash('message-success','Document Status creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DocStatus $doc_status)
    {
        return response()->json($doc_status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DocStatus $doc_status)
    {
        return response()->json($doc_status);
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
        $doc_status = DocStatus::find($id);
        $data = $request->all();
        $doc_status->update($data);
        $doc_status->save();
        Session::flash('message-success','Documents Status actualizado correctamente.');
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
