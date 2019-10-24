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
use App\Partner_bank;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\operationRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Session;

class OperationController extends Controller
{
    private $operation;
    private $account;
    private $accounts;
    private $operators;
    private $document;
    private $sumplierCom;
    private $banks;
    private $status;
    private $orderPmtTerm;
    private $businessLine;
    private $incoterms;
    private $currencies;
    private $ports;
    private $countries;
    private $cargoUnits;
    private $logunits;
    private $select;

    /**
     * [__contruct description]
     * @param  Operation $stmt [description]
     * @return [type]          [description]
     */
    public function __construct(Operation $stmt, Account $account, User $operator, Document $document, Status $status, AccountContact $contact, OrderPmtTerm $orderPmtTerm, Partner_bank $bank, BusinessLine $businessLine, Incoterm $incoterm, Currency $currency, Port $port, Country $country, CargoUnit $cargoUnit, Logunit $logunit)
    {
        $this->operation    = $stmt;    
        $this->account      = $account;
        $this->customers    = $account->get()->pluck('name','id')->prepend('Selected...','');
        $this->operators    = $operator->get()->pluck('fullname','id')->prepend('Selected...','');
        $this->document     = $document;
        $this->status       = $status->get()->pluck('name', 'id')->prepend('Selected...','');
        $this->sumplierCom  = $contact;
        $this->banks        = $bank->get()->pluck('bank_name','id')->prepend('Selected...','');
        $this->orderPmtTerm = $orderPmtTerm;
        $this->businessLine = $businessLine->get()->pluck('name','id')->prepend('Selected...','');
        $this->incoterms    = $incoterm->get()->pluck('name','id')->prepend('Selected...','');
        $this->currencies   = $currency->get()->pluck('code','id')->prepend('Selected...','');
        $this->ports        = $port->get()->pluck('name','id')->prepend('Selected...','');
        $this->countries    = $country->get()->sortBy('name')->pluck('name','id')->where('active',0)->prepend('Selected...','');
        $this->cargoUnits   = $cargoUnit->get()->pluck('name','id')->prepend('-','');
        $this->logunits     = $logunit->get()->pluck('name','id')->prepend('Selected...','');
        $this->select       = 'Selected..';
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
        return view('pages.operation.index',compact('operations','topMenu','admin'));
    }

    /**
     * [indexAsoc description]
     * @param  [type] $id [User]
     * @return [type]     [list opetarion aosc to user]
     */
    public function indexAsoc()
    {
        $admin      = false;
        $topMenu    = 'pages.operation.topMenu';
        $operations = $this->operation->all()->where('purchase_by', Auth::user()->id);
        return view('pages.operation.index',compact('operations','accounts','business','operators','status','parther', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu','payment_terms','cargoUnits','logunits','admin'));    }
    
    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {
        $date           = Carbon::now()->format("Y/m/d");
        $admin          = false;
        $create         = true;
        $status         = Status::get()->where('name','1- Being scheduled')->pluck('name', 'id');
        $operators      = $this->operators;
        $customers      = $this->customers;
        $parther        = $this->operation->CustomPluck('Partner');
        $supplier       = $this->operation->CustomPluck('Supplier');
        $incoterms      = $this->incoterms;
        $business       = BusinessLine::get()->where('name','Trading')->pluck('name','id');
        $currencies     = $this->currencies;
        $ports          = $this->ports;
        $countries      = $this->countries;
        $payment_terms  = $this->orderPmtTerm->get()->pluck('payment_terms','id');
        $cargoUnits     = $this->cargoUnits;
        $logunits       = $this->logunits;
        $sumplierCom    = [''=>'Selected...'];
        $customerCom    = [''=>'Selected...'];
        $banks          = $this->banks;
        $topMenu        = 'pages.operation.topMenu';
        return view('pages.operation.create',compact('customers','business','operators','status','parther', 'incoterms', 'currencies', 'ports','countries','supplier','topMenu','payment_terms','cargoUnits','logunits','admin','create','date','sumplierCom','customerCom','banks','default'));
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
        return response()->json($operation);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operation  $operation
     * @return \Illuminate\Http\Response                                                                   
     */
    public function edit(Operation $operation)
    {
        $admin              = false;
        $create             = true;
        $status             = $this->status;
        $operators          = $this->operators;
        $customers          = $this->customers;
        $accounts           = $this->accounts;
        $parther            = $this->operation->CustomPluck('Partner');
        $supplier           = $this->operation->CustomPluck('Supplier');
        $incoterms          = $this->incoterms;
        $business           = $this->businessLine;
        $currencies         = $this->currencies;
        $ports              = $this->ports;
        $countries          = $this->countries;
        $payment_terms      = $this->orderPmtTerm->get()->pluck('payment_terms','id');
        $cargoUnits         = $this->cargoUnits;
        $logunits           = $this->logunits;
        $sumplierCom        = $this->sumplierCom->get()->where('account_id',$operation->supplier_id)->pluck('fullname','id');
        $customerCom        = $this->sumplierCom->get()->where('account_id',$operation->customer_id)->pluck('fullname','id');
        $banks              = $this->banks;
        $topMenu            = 'pages.operation.topMenu';
        $operations         = $this->operation->all();
        $default            = null;    
        
        return view('pages.operation.edit',compact('operation','operations','accounts','business','operators','status','parther', 'incoterms', 'currencys', 'ports','countries','supplier','topMenu','payment_terms','cargoUnits','logunits','admin','create', 'sumplierCom','customerCom','banks','currencies','customers','default'));
    }

    /* Update the specified resource in storage.
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
        $operation->update($data);
        dd($request->input('purchase_curr'));
        Session::flash('message-success',' Operation '. $request->name.' actualizado correctamente.');
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
    /**
     * Undocumented function
     *
     * @param [type] $customer_id
     * @return void
     */
    public function customer_bank($id)
    {
        $banks = Partner_bank::get()->where('company_id',$id)->pluck('bank_name','id');
        return response()->json($banks);
        
    }
    /**
     * Undocumented function
     *
     * @param [type] $supplier_id
     * @return void
     */
    public function supplierComercial($supplier_id)
    {
        $supplierCommercials = AccountContact::get()->where('account_id',$supplier_id)->pluck('fullname', 'id');
        return response()->json($supplierCommercials);
        
    }
}