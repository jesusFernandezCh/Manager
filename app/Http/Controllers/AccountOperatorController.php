<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\accountRequest;
use App\AccountCategory as Category;
use App\Account;
use App\Country;
use App\AccountMeta;
use App\AccountMetaType as MetaType;
use App\AccountContact as Contact;
use Session;


class AccountOperatorController extends Controller
{
    private $account;
    private $categories;
    private $countries;
    private $meta;
    private $metaTypes;
    private $contacts;

    public function __construct(Account $account, AccountMeta $meta, MetaType $metaType, Contact $contact)
    {
        $this->account      = $account;
        $this->categories   = Category::get()->pluck('name', 'id');
        $this->countries    = Country::get()->sortBy('name')->pluck('name','id')->where('active',0)->prepend('Selected...','');
        $this->meta         = $meta;
        $this->metaTypes    = $metaType->get()->where('active',1)->pluck('metatype','id');
        $this->contacts     = $contact->all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get()->where('active',1)->pluck('name','id');
        $countries  = $this->countries;
        $accounts   = $this->account->all();
        return view('pages.accountOperator.index',compact('accounts','categories', 'countries'));
    }

    /**
     * [indexAsoc description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function indexAsoc($id)
    {
        $categories = $this->categories;
        $countries  = $this->countries;
        $accounts   = $this->account->all()->where($id, 'id');
        return view('pages.accountOperator.index',compact('accounts','categories', 'countries'));
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
    public function store(accountRequest $request)
    {
        $account = $this->account->create($request->all());
        $file = $request->file('file');

        if ($file != null) {
            // url file save
            $path = public_path().'/img/AccountLogos/';
            // file extension
            $extension = $file->getClientOriginalExtension();
            // file name
            $fileName = $account->id. '.' . $extension;
            // file save
            $file->move($path, $fileName);
            // add route avarat
            // $data = array_add($data, 'image', $fileName);
        }
        $account->categories()->attach($request->input('category_id'));
        $account = collect($account)->prepend('show','page');
        Session::flash('message-success',' Account '. $request->name.' creado correctamente.');
        return response()->json($account);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account    = $this->account->find($id);
        $categories = $this->categories;
        $countries  = $this->countries;
        $metas      = $this->meta->all()->where('account_id',$id);
        $metaTypes  = $this->metaTypes;
        $contacts   = $this->contacts;
        $operator   = true;
        return view('pages.accountOperator.show',compact('account','categories','countries','operator','metas', 'metaTypes','contacts'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account    = $this->account->find($id);
        $categories = $this->categories;
        $countries  = $this->countries;
        return view('pages.accountOperator.edit',compact('account','categories','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(accountRequest $request, $id)
    {
        $account = $this->account->find($id);
        $account->update($request->all());
        $file = $request->file('file');

        if ($file != null) {
            // url file save
            $path = public_path().'/img/AccountLogos/';
            // file extension
            $extension = $file->getClientOriginalExtension();
            // file name
            $fileName = $account->id. '.' . $extension;
            // file save
            $file->move($path, $fileName);
            // add route avarat
            // $data = array_add($data, 'image', $fileName);
        }
        $account->categories()->sync($request->input('category_id'));
        Session::flash('message-success',' Account '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $accountOperator)
    {
        $accountOperator->categories()->detach($accountOperator->categories);
        $meta = $accountOperator->accountMeta()->first();
        if (isset($meta->id)) {
                Session::flash('message-error',' Account tiene meta '.$meta->value.' asosciada.');
        }else{
            $accountOperator->delete();
            Session::flash('message-success',' Account eliminado correctamente.');
        }    
    }
}
