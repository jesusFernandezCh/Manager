<?php

namespace App\Http\Controllers;

use App\Document;
use App\Document_type;
use App\Account;
use App\Operation;
use App\Http\Requests\Document\CreateRequest;
use App\Http\Requests\Document\updateRequest;
use Illuminate\Http\Request;
use Session;
use Redirect;

class DocumentController extends Controller
{
    private $document;
    private $account;
    private $documentType;
    private $operations;
    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
        $this->account = Account::get()->pluck('name', 'id');
        $this->documentType = Document_type::get()->pluck('name', 'id');
        $this->operations = Operation::get()->pluck('description', 'id');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document = $this->document->all();
        $account = $this->account->all();
        $documentType = $this->documentType->all();
        $operation = Operation::all();
        
        return view('pages.account.document.index',compact('document','documentType','account', 'operation'));
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
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $public_path = public_path();
        $url = $public_path.'/storage/';

       \Storage::disk('local')->put($name,  \File::get($file));

        $data = new Document; 
        $data->name = $request->name;
        $data->account_id = $request->account_id;
        $data->operation_id = $request->operation_id;
        $data->file = $url.$name;
        $data->save();
        $data->documentTypes()->sync($request->documentType);
        return response()->json(['message'=>'Documento registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return response()->json($document);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
       
        $account = $this->account->all();
        $documentType = $this->documentType->all();
        $operation = $this->operations;
        
        return view('pages.account.document.edit-2',compact('document','documentType','account', 'operation'));
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
        $document = Document::find($id);
        $data = $request->all();
        $document->update($data);
        $document->save();
        $document->documentTypes()->sync($request->documentType);
        Session::flash('message-success','El documento '. $request->name.' fue editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return response()->json(['message'=>'Documento eliminado correctamente']);
    }

    public function download($id)
    {
        $document = Document::find($id);
        $file = $document->file;

        return response()->download($file);
    }

    /**
     * [documentsAsoc description]
     * @param  [int] $id [id operation]
     * @return [array]     [documents]
     */
    public function documentsOperation($id_operation)
    {
        $admin          = false;
        $create         = true;
        $operation      = Operation::find($id_operation);
        $documents      = $this->document->all()->where('operation_id',$id_operation);
        $documentType   = $this->documentType;
        $account        = $this->account;
        return view('pages.operation.documents.index',compact('documents','operation','documentType', 'account', 'admin', 'create'));
    }

    /**
     * [edit document asoc to operation]
     * @param  [type] $id        [id document]
     * @param  [type] $operation [id operation]
     * @return [type]            [document]
     */
    public function documentOperationEdit($id, $operation)
    {
        $document = $this->document->find($id);
        $account = $this->account->all();
        $documentType = $this->documentType->all();
        $operations = $this->operations;
        $operation = $operation;

        return view('pages.operation.documents.edit',compact('document','operation','account','documentType','operations'));
    }
}
