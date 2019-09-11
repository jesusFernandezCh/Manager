<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountCategory as Category;
use App\Account;
use App\Country;
use Session;
use Redirect;

class AccountController extends Controller
{
    private $account;
    private $category;
    private $country;

    public function __construct(Account $account, Category $category, Country$country)
    {
        $this->account = $account;
        $this->category = $category;
        $this->country  = $country;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category->get()->where('active',1)->pluck('name','id');
        $countries  = $this->country->get()->where('active',1)->pluck('name','id');
        $accounts   = $this->account->all();
        return view('pages.account.index',compact('accounts','categories', 'countries'));
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
        $account = $this->account->create($request->all());
        $account->categories()->attach($request->input('category_id'));
        Session::flash('message-success',' Account '. $request->name.' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        $account    = $account;
        $categories = $this->category->get()->pluck('name','id');
        $countries  = $this->country->get()->pluck('name','id');
        return view('pages.account.edit',compact('account','categories','countries'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        $account    = $account;
        $categories = $this->category->get()->pluck('name','id');
        $countries  = $this->country->get()->pluck('name','id');
        return view('pages.account.edit',compact('account','categories','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $account = $this->account->find($id);
        $account->update($request->all());
        $account->save();
        $account->categories()->sync($request->input('category_id'));
        Session::flash('message-success',' Account '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $account->categories()->detach($account->categories);
        $meta = $account->accountMeta()->first();
        if (isset($meta->id)) {
                Session::flash('message-error',' Account tiene meta '.$meta->value.' asosciada.');
        }else{
            $account->delete();
            Session::flash('message-success',' Account eliminado correctamente.');
        }    
    }
}
