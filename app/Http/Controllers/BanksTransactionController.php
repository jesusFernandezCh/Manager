<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BanksTransaction\CreateRequest;
use App\Http\Requests\BanksTransaction\updateRequest;
use Session;
use App\Bank;
use App\User;
use App\Bank_transaction;
use App\Bank_account_type;

class BanksTransactionController extends Controller
{
    private $bank;
    private $bank_transaction;
    private $user;
    private $bank_account_type;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(Bank_transaction $bank_transaction, Bank $bank, User $user, Bank_account_type $bank_account_type)
    {
        
        $this->bank_transaction = Bank_transaction::all();
        $this->bank = Bank::get()->pluck('name', 'id');
        $this->bank_account_type = Bank_account_type::get()->pluck('name', 'id');
        $this->user = User::get()->pluck('fullname', 'id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank = $this->bank->all();
        $user = $this->user->all();
        $bank_account_type = $this->bank_account_type->all();
        $trans = Bank_transaction::all();

        $var = __('Selected..');
        $bank_account_type = array('' => $var) + $bank_account_type;

        return view('pages.payments.bank_transaction.index', compact('trans','bank','bank_account_type','user'));
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
        $bank = Bank_transaction::create($data);
        Session::flash('message-success',' Bank Transaction creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bank_transaction $bank_transaction)
    {
       $info = array($bank_transaction);
       array_push($info, $bank_transaction->payments);
       return response()->json($info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank_transaction $bank_transaction)
    {
        return response()->json($bank_transaction);
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
        $bank_transaction = Bank_transaction::find($id);
        $data = $request->all();
        $bank_transaction->update($data);
        $bank_transaction->save();
        Session::flash('message-success',' Bank Transaction actualizada correctamente.');
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
