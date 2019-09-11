<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocumentsType\CreateRequest;
use App\Http\Requests\DocumentsType\updateRequest;
use App\Document_type;

class DocumentsTypeController extends Controller
{
    public function index()
    {
        $documentType=Document_type::all();
        $status = [
            '1'    => 'Active',
            '2'  => 'Inactive',
            '3' => 'Suspended'
        ];
        return view('pages.documents.documentsType.index',compact('documentType','status')); 
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
        $documentType = Document_type::create($data);
        return response()->json(['message'=>'Document Type registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document_type $documentsType)
    {
 
        return response()->json($documentsType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document_type $documentsType)
    {
        return response()->json($documentsType);
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
        $currency = Document_type::find($id);
        $data = $request->all();
        $currency->update($data);
        $currency->save();
        return response()->json(['message'=>'Document Type actualizado correctamente']);
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
