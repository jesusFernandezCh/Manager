<?php

namespace App\Http\Controllers;

use App\AccountCourrier;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountCourrierController extends Controller
{
    private $stmt;
    private $account;
    private $accounts;

    public function __construct(AccountCourrier $stmt, Account $account)
    {
        $this->stmt     = $stmt;
        $this->accounts = $account->all()->pluck('name','id');
        $this->account  = $account;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts   = $this->accounts;
        $courriers  = $this->stmt->all();
        return view('pages.account.accountCourrier.index',compact('courriers','accounts'));
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
        Session::flash('message-success',' Account Courrier registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccountCourrier  $accountCourrier
     * @return \Illuminate\Http\Response
     */
    public function show($account_id)
    {
        $account    = $this->account->find($account_id);
        $accounts   = $this->accounts;
        $courriers  = $this->stmt->all()->where('account_id',$account_id);
        return view('pages.account.accountCourrier.index',compact('courriers','accounts','account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccountCourrier  $accountCourrier
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountCourrier $accountCourrier)
    {
        $account  = $this->account->find($accountCourrier->account->id);
        $accounts = $this->accounts;
        return view('pages.account.accountCourrier.edit',compact('accountCourrier','accounts', 'account'));
    }

     /**
     * Show the form for editing accountCourrierAsoc the specified resource.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function editAsoc($accountCurrier_id)
    {
        $accountCourrier = $this->stmt->find($accountCurrier_id);
        $account  = $this->account->find($accountCourrier->account_id);
        $accounts = $this->accounts;
        return view('pages.account.accountCourrier.edit',compact('accountCourrier','accounts', 'account'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccountCourrier  $accountCourrier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountCourrier $accountCourrier)
    {
        $accountCourrier->update($request->all());
        Session::flash('message-success',' Account Courrier actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccountCourrier  $accountCourrier
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountCourrier $accountCourrier)
    {
        $accountCourrier->delete();
        Session::flash('message-success',' Account Courrier eliminado correctamente.');
    }
}
