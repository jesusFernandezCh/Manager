<?php

namespace App\Http\Controllers;

use App\Operation;
use App\Account;
use App\Document;
use App\User;
use App\Incoterm;
use App\Currency;
use App\Port;
use App\Country;
use App\OperationStatus as Status;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\operationRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Session;

class OperationController extends Controller
{
    private $operation;
    private $account;
    private $accounts;
    private $operators;
    private $document;
    private $status;

    /**
     * [__contruct description]
     * @param  Operation $stmt [description]
     * @return [type]          [description]
     */
    public function __construct(Operation $stmt, Account $account, User $operator, Document $document, Status $status)
    {
        $this->operation    = $stmt;    
        $this->account      = $account;
        $this->accounts     = $account->get()->pluck('name','id');
        $this->operators    = $operator->get()->pluck('fullname','id');
        $this->document     = $document;
        $this->status       = $status->get()->pluck('name', 'id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin      = true;
        $status     = $this->status;
        $operators  = $this->operators;
        $accounts   = $this->accounts;
        $principal  = $this->operation->CustomPluck('Partner');
        $supplier   = $this->operation->CustomPluck('Supplier');
        $incoterms  = Incoterm::get()->pluck('name','id');
        $currencys  = Currency::get()->pluck('code','id');
        $ports      = Port::get()->pluck('name','id');
        $countries  = Country::get()->pluck('name','id');
        $topMenu    = 'pages.operation.topMenu';
        $operations = $this->operation->all();
        return view('pages.operation.index',compact('operations','accounts','operators','status','principal', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu','admin'));
    }

    /**
     * [indexAsoc description]
     * @param  [type] $id [User]
     * @return [type]     [list opetarion aosc to user]
     */
    public function indexAsoc()
    {
        $status     = $this->status;
        $operators  = $this->operators;
        $accounts   = $this->accounts;
        $principal  = $this->operation->CustomPluck('Partner');
        $supplier   = $this->operation->CustomPluck('Supplier');
        $incoterms  = Incoterm::get()->pluck('name','id');
        $currencys  = Currency::get()->pluck('code','id');
        $ports      = Port::get()->pluck('name','id');
        $countries  = Country::get()->pluck('name','id');
        $topMenu    = 'pages.operation.topMenu';
        $operations = $this->operation->all()->where('purchase_by', Auth::user()->id);
        return view('pages.operation.index',compact('operations','accounts','operators','status','principal', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(operationRequest $request)
    {
        // dd($request->all());
        $date = Carbon::now();
        //last id operation
        $last = $this->operation->get()->last();
        //code (date format(Ymd) - 000 lastId + 1) ejem: 20190903-0001
        $code = $date->format("Ymd") . '-' . str_pad(++$last->id, 4, "0", STR_PAD_LEFT);
        //add code to array request
        $request = Arr::add($request->all(),'code',$code);
        // dd($request);
        $this->operation->create($request);
        Session::flash('message-success',' Operation '. $request['code'].' creado correctamente.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operation  $operation
     * @return \Illuminate\Http\Response                                                                   
     */
    public function edit(Operation $operation)
    {
        $status     = $this->status;
        $operators  = $this->operators;
        $accounts   = $this->accounts;
        $principal  = $this->operation->CustomPluck('Partner');
        $supplier  = $this->operation->CustomPluck('Supplier');
        $incoterms  = Incoterm::get()->pluck('name','id');
        $currencys  = Currency::get()->pluck('code','id');
        $ports      = Port::get()->pluck('name','id');
        $countries  = Country::get()->pluck('name','id');
        $topMenu    = 'pages.operation.topMenu';
        return view('pages.operation.edit',compact('operation','accounts','operators','status','principal', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function update(operationRequest $request, Operation $operation)
    {
        $operation->update($request->all());
        $operation->save();
        Session::flash('message-success',' Operation '. $request->name.' editado correctamente.');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operation $operation)
    {
        $operation->delete();
        Session::flash('message-success',' Operation '. $operation->name.' eliminado correctamente.');
    }
}
