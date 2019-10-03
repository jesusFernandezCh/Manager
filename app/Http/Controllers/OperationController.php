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
use App\AccountContact;
use App\OrderPmtTerm;
use App\CargoUnit;
use App\Logunit;
use App\BusinessLine;
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
    private $contact;
    private $status;
    private $orderPmtTerm;

    /**
     * [__contruct description]
     * @param  Operation $stmt [description]
     * @return [type]          [description]
     */
    public function __construct(Operation $stmt, Account $account, User $operator, Document $document, Status $status, AccountContact $contact, OrderPmtTerm $orderPmtTerm)
    {
        $this->operation    = $stmt;    
        $this->account      = $account;
        $this->accounts     = $account->get()->pluck('name','id');
        $this->operators    = $operator->get()->pluck('fullname','id');
        $this->document     = $document;
        $this->status       = $status->get()->pluck('name', 'id');
        $this->contact      = $contact;
        $this->orderPmtTerm = $orderPmtTerm;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin      = true;
        $topMenu    = 'pages.operation.topMenu';
        $operations = $this->operation->all();
        return view('pages.operation.index',compact('operations','accounts','business','operators','status','parther', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu','payment_terms','cargoUnits','logunits','admin'));
    }

    /**
     * [indexAsoc description]
     * @param  [type] $id [User]
     * @return [type]     [list opetarion aosc to user]
     */
    public function indexAsoc()
    {
        $admin      = false;
        $status     = $this->status;
        $operators  = $this->operators;
        $accounts   = $this->accounts;
        $parther    = $this->operation->CustomPluck('Partner');
        $supplier   = $this->operation->CustomPluck('Supplier');
        $incoterms  = Incoterm::get()->pluck('name','id');
        $business   = BusinessLine::get()->pluck('name','id');
        $currencys  = Currency::get()->pluck('code','id');
        $ports      = Port::get()->pluck('name','id');
        $countries  = Country::get()->pluck('name','id');
        $payment_terms = $this->orderPmtTerm->get()->pluck('payment_terms','id');
        $cargoUnits = CargoUnit::get()->pluck('name','id');
        $logunits   = Logunit::get()->pluck('name','id');
        $topMenu    = 'pages.operation.topMenu';
        $operations = $this->operation->all()->where('purchase_by', Auth::user()->id);
        return view('pages.operation.index',compact('operations','accounts','business','operators','status','parther', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu','payment_terms','cargoUnits','logunits','admin'));    }
    
    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {
        $date = Carbon::now()->format("Y/m/d");
        $admin      = false;
        $create     = true;
        $status     = $this->status;
        $operators  = $this->operators;
        $accounts   = $this->accounts;
        $parther    = $this->operation->CustomPluck('Partner');
        $supplier   = $this->operation->CustomPluck('Supplier');
        $incoterms  = Incoterm::get()->pluck('name','id');
        $business   = BusinessLine::get()->pluck('name','id');
        $currencys  = Currency::get()->pluck('code','id');
        $ports      = Port::get()->pluck('name','id');
        $countries  = Country::get()->pluck('name','id');
        $payment_terms = $this->orderPmtTerm->get()->pluck('payment_terms','id');
        $cargoUnits = CargoUnit::get()->pluck('name','id');
        $logunits   = Logunit::get()->pluck('name','id');
        $topMenu    = 'pages.operation.topMenu';
        return view('pages.operation.create',compact('accounts','business','operators','status','parther', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu','payment_terms','cargoUnits','logunits','admin','create','date'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(operationRequest $request)
    {
        $date = Carbon::now();
        //last operation
        $last = $this->operation->get()->last();
        if (isset($last)) {
            //code (date format(Ymd) - 000 lastId + 1) ejem: 20190903-0001
            $code = $date->format("Ymd") . '-' . str_pad(++$last->id, 4, "0", STR_PAD_LEFT);
        }else{
            $code = $date->format("Ymd") . '-' . str_pad(1, 4, "0", STR_PAD_LEFT);
        }
        //add code to array request
        $request = Arr::add($request->all(),'code',$code);
        //add purchase_by to request
        $request = Arr::add($request,'purchase_by',Auth::user()->id);
        // dd($request);
        $operation = $this->operation->create($request);
        Session::flash('message-success',' Operation '. $request['code'].' creado correctamente.');
        return $this->edit($operation);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operation  $operation
     * @return \Illuminate\Http\Response                                                                   
     */
    public function edit(Operation $operation)
    {
        $admin      = false;
        $create     = true;
        $status     = $this->status;
        $operators  = $this->operators;
        $accounts   = $this->accounts;
        $parther    = $this->operation->CustomPluck('Partner');
        $supplier   = $this->operation->CustomPluck('Supplier');
        $incoterms  = Incoterm::get()->pluck('name','id');
        $business   = BusinessLine::get()->pluck('name','id');
        $currencys  = Currency::get()->pluck('code','id');
        $ports      = Port::get()->pluck('name','id');
        $countries  = Country::get()->pluck('name','id');
        $payment_terms = $this->orderPmtTerm->get()->pluck('payment_terms','id');
        $cargoUnits = CargoUnit::get()->pluck('name','id');
        $logunits   = Logunit::get()->pluck('name','id');
        $topMenu    = 'pages.operation.topMenu';
        $operations = $this->operation->all();

        return view('pages.operation.edit',compact('operation','operations','accounts','business','operators','status','parther', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu','payment_terms','cargoUnits','logunits','admin','create'));
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
        $data = $request->all();
        if(null == $request->input('po_signed')){
            $data = Arr::add($data,'su_po_signed', null);
        }
        if(null == $request->input('so_signed')){
           $data = Arr::add($data,'cu_po_signed', null);
        }
        // dd($data);
        $operation->update($data);
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
