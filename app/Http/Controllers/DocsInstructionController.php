<?php

namespace App\Http\Controllers;

use App\DocsInstruction;
use App\Account;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\DocsInstruction\DocsInstructionRequest;
use Illuminate\Support\Arr;

class DocsInstructionController extends Controller
{
    private $docsInstruction;
    private $accounts;
    private $account;

    /**
     * Undocumented function
     *
     * @param DocsInstruction $stmt
     */
    public function __construct(DocsInstruction $stmt, Account $account)
    {
        $this->docsInstruction = $stmt;
        $this->accounts = $account->all()->pluck('name','id')->prepend(__('selected...'), '');
        $this->account = $account;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = $this->accounts;
        $docsInstructions = $this->docsInstruction->all();
        return view('pages.account.docsInstruction.index', compact('docsInstructions','accounts'));
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
    public function store(DocsInstructionRequest $request)
    {
        $this->docsInstruction->create($request->all());
        Session::flash('message-success',' DocsInstruction '. $request['cnee'].' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function show($account_id)
    {
        $account = Account::find($account_id);
        $accounts = $this->accounts;
        $docsInstructions = $this->docsInstruction->all()->where('account_id',$account_id);
        return view('pages.account.docsInstruction.index', compact('docsInstructions','accounts','account'));
    }

    /**
     * Show the form for editing docsinstructionAsoc the specified resource.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function editAsoc($id)
    {
        $docsInstruction = $this->docsInstruction->find($id);
        $account  = Account::find($docsInstruction->id);
        $accounts = $this->accounts;
        return view('pages.account.docsInstruction.edit',compact('docsInstruction','accounts', 'account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function edit(DocsInstruction $docsInstruction)
    {
        $accounts = $this->accounts;
        return view('pages.account.docsInstruction.edit',compact('docsInstruction','accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function update(DocsInstructionRequest $request, DocsInstruction $docsInstruction)
    {
        
        $data = $request->all();
        if(null == $request->input('preshipmentinspection')) $data = Arr::add($data,'preshipmentinspection', 0);
        if(null == $request->input('invoice')) $data = Arr::add($data,'invoice', 0);
        if(null == $request->input('co_forma')) $data = Arr::add($data,'co_forma', 0);
        if(null == $request->input('packing_list')) $data = Arr::add($data,'packing_list', 0);
        if(null == $request->input('hc')) $data = Arr::add($data,'hc', 0);
        if(null == $request->input('halai')) $data = Arr::add($data,'halai', 0);
        if(null == $request->input('haccp')) $data = Arr::add($data,'haccp', 0);
        if(null == $request->input('legalization')) $data = Arr::add($data,'legalization', 0);
        if(null == $request->input('quality_certificate')) $data = Arr::add($data,'quality_certificate', 0);
        if(null == $request->input('exports_declaration')) $data = Arr::add($data,'exports_declaration', 0);
        if(null == $request->input('waver_besc')) $data = Arr::add($data,'waver_besc', 0);
        if(null == $request->input('no_dioxyn')) $data = Arr::add($data,'no_dioxyn', 0);
        if(null == $request->input('lab_analysis')) $data = Arr::add($data,'lab_analysis', 0);
        if(null == $request->input('no_radiation')) $data = Arr::add($data,'no_radiation', 0);
        $docsInstruction->update($data);
        Session::flash('message-success',' DocsInstruction '. $request['cnee'].' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocsInstruction  $docsInstruction
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocsInstruction $docsInstruction)
    {
        $docsInstruction->delete();
        Session::flash('message-success',' DocsInstruction '. $docsInstruction->cnee.' actualizado correctamente.');
    }
}
