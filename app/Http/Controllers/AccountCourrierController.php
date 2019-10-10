<?php

namespace App\Http\Controllers;

use App\AccountCourrier;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountCourrierController extends Controller
{
    private $stmt;
    private $accounts;

    public function __construct(AccountCourrier $stmt, Account $account)
    {
        $this->stmt     = $stmt;
        $this->accounts = $account->all()->pluck('name','id');
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
    public function show(AccountCourrier $accountCourrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccountCourrier  $accountCourrier
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountCourrier $accountCourrier)
    {
        $accounts = $this->accounts;
        return view('pages.account.accountCourrier.edit',compact('accountCourrier','accounts'));
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
