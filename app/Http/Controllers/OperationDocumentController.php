<?php

namespace App\Http\Controllers;

use App\Currier;
use App\DocStatus;
use App\Operation;
use App\OperationDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OperationDocumentController extends Controller
{
    private $stmt;
    private $route;
    private $status;
    private $courriers;
    
    /**
     * Undocumented function
     *
     * @param OperationDocument $operationDocument
     */
    public function __construct(OperationDocument $operationDocument, DocStatus $status, Currier $currier)
    {
        $this->stmt     = $operationDocument;
        $this->route    = 'pages.operation.topMenu';
        $this->status   = $status->all()->pluck('name', 'id');
        $this->courriers = $currier->all()->pluck('currier_name', 'id');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        Session::flash('message-success',' Document  registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OperationDocument  $operationDocument
     * @return \Illuminate\Http\Response
     */
    public function show($operation)
    {
        $create = true;
        $admin  = false;
        $route  = $this->route;
        $status = $this->status;
        $courriers = $this->courriers;
        $operation = Operation::find($operation);
        $custMailings = $this->stmt->CustomerMailingAddres($operation->customer_id);

        return view('pages.operation.operationDocument.create',compact('operation','route','admin','create', 'status', 'courriers','custMailings'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OperationDocument  $operationDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(OperationDocument $operationDocument)
    {
        $create = true;
        $admin  = false;
        $route  = $this->route;
        $status = $this->status;
        $courriers = $this->courriers;
        $operation = Operation::find($operationDocument->id_operation);
        $custMailings = $this->stmt->CustomerMailingAddres($operation->customer_id);
        return view('pages.operation.operationDocument.edit',compact('operation','route','admin','create', 'status', 'courriers','custMailings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OperationDocument  $operationDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperationDocument $operationDocument)
    {
        $operationDocument->update($request->all());
        Session::flash('message-success',' Document  actualizado correctamente.');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OperationDocument  $operationDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperationDocument $operationDocument)
    {
        $operationDocument->delete();
        Session::flash('message-success',' Document  elminado correctamente.');   
    }
}
