<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountContact\accountContactRequest as contactRequest;
use App\AccountContact;
use App\Account;
use App\Country;
use Session;


class AccountContactController extends Controller
{
    private $contact;
    private $account;
    private $accounts;
    private $countries;

    /**
     * [__construct description]
     * @param AcoountContact $contact [description]
     * @param Account        $account [description]
     * @param Country        $country [description]
     */
    public function __construct(AccountContact $contact, Account $account, Country $country)
    {
        $this->contact      = $contact;
        $this->account      = $account;
        $this->accounts     = $account->get()->pluck('name', 'id');
        $this->countries    = $country->get()->pluck('name', 'id');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts   = $this->contact->all();
        $countries  = $this->countries;
        $accounts   = $this->account->all();
        $contact   = true;
        return view('pages.account.accountContact.index',compact('contacts','accounts','countries','contact'));
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
    public function store(contactRequest $request)
    {
        $this->contact->create($request->all());
        Session::flash('message-success',' Account Contact '. $request->fullname.' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact        = $this->contact->find($id);
        $accounts       = $this->account->get()->pluck('name','id');
        $countries      = $this->countries;
        return view('pages.account.accountContact.edit',compact('contact','accounts', 'countries'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(contactRequest $request, $id)
    {
        $contact = $this->contact->find($id);
        $contact->update($request->all());
        $contact->save();
        Session::flash('message-success',' Account Contact '. $request->fullname.' editado correctamente.');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = $this->contact->find($id);
        $contact->delete();
        Session::flash('message-success',' Account Contact '. $contact->fullname.' eliminado correctamente.');
    }
    
     /**
      * [contactAsoc description]
      * @param  [type] $id [id account]
      * @return [type]     [description]
      */
    public function contactAsoc($id)
    {
        $contacts   = $this->contact->all()->where('account_id',$id);
        $countries  = $this->countries;
        $account    = $this->account->find($id);
        return view('pages.accountOperator.accountContact.index',compact('contacts','account','countries','contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactAsocEdit($contact, $account)
    {
        $contact     = $this->contact->find($contact);
        $accounts    = $this->account->get()->pluck('name','id');
        $countries   = $this->countries;
        $account     = $this->account->find($account);
        return view('pages.accountOperator.accountContact.edit',compact('contact','accounts', 'countries', 'account'));
    }
}
