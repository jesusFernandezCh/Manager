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
use Storage;

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
        $this->operations = Operation::get()->pluck('code', 'id');
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

        $queryOperation = Operation::all();
        foreach ($queryOperation as $key => $value) {
            $operation[$value->id]= $value->code.' - '.$value->Supplier->name. ' - '.$value->s_incoterm_place.'$';
        }

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
        \Storage::disk('local')->put($name,  \File::get($file));
        $request = $request->all();
        $request['file'] = $name;
        $document = $this->document->create($request);
        $document->documentTypes()->sync($request['documentType']);
        Session::flash('message-success',' Document '. $name.' '.trans('messages.created'));

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
        $operations = $this->operations;

        return view('pages.account.document.edit-2',compact('document','documentType','account', 'operations'));
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
        $document->documentTypes()->sync($request->documentType);
        Session::flash('message-success',' Document '. $document->name.' '.trans('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {

        Storage::delete($document->file);
        $document->delete();
        Session::flash('message-success',' Document '. $document->name.' '.trans('messages.deleted'));
    }

    public function download($id)
    {
        $document   = Document::find($id);
        $file       = public_path().'/storage/'.$document->file;
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
        $admin          = false;
        $create         = true;
        $document       = $this->document->find($id);
        $account        = $this->account->all();
        $documentType   = $this->documentType->all();
        $operations     = $this->operations;
        $operation      = Operation::find($operation);

        return view('pages.operation.documents.edit',compact('document','operation','account','documentType','operations','admin','create'));
    }
}
