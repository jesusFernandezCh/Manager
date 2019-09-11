<?php

namespace App\Http\Controllers;

use App\AccountMeta;
use App\Account;
use App\AccountMetaType as MetaType;
use Illuminate\Http\Request;
use Session;
use Redirect;

class AccountMetaController extends Controller
{
    private $meta;
    private $account;
    private $accounts;
    private $metaTypes;

    public function __construct(AccountMeta $meta, Account $account, MetaType $metaType)
    {
        $this->meta         = $meta;
        $this->account      = $account;
        $this->accounts     = $account->get()->pluck('name','id');
        $this->metaTypes    = $metaType->get()->where('active',1)->pluck('metatype','id');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $accounts     = $this->accounts;
      $metaTypes    = $this->metaTypes;
      $metas        = $this->meta->all();
      $operator     = true;
      $type         = true;
      return view('pages.account.accountMeta.index',compact('metas', 'accounts', 'metaTypes','operator','type'));
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
        $this->meta->create($request->all());
        Session::flash('message-success',' Account Meta '. $request->name.' creada correctamente.');
        return Response()->json($request->all());
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
        $meta       = $this->meta->find($id);
        $accounts   = $this->accounts;
        $metaTypes  = $this->metaTypes;
        $operator   = true;
        $type       = true;
        return view('pages.account.accountMeta.edit',compact('meta','accounts','metaTypes','operator','type'));
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
        $meta = $this->meta->find($id);
        $meta->update($request->all());
        $meta->save();
        Session::flash('message-success',' Account Meta '. $request->name.' editada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meta = $this->meta->find($id);
        $meta->delete();
        Session::flash('message-success',' Account Meta elminada correctamente.');
    }

    /**
     * [Edit meta asociated from account]
     * @param  [type] $meta    [description]
     * @param  [type] $account [description]
     * @return [type]          [description]
     */
    public function metaEdit($meta, $account)
    {
        $meta       = $this->meta->find($meta);
        $accounts   = $this->accounts;
        $metaTypes  = $this->metaTypes;
        $account    = $this->account->find($account);
        
        return view('pages.accountOperator.accountMeta.edit',compact('meta','accounts','metaTypes','account'));
    }
}
