<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BankAccountType\CreateRequest;
use App\Http\Requests\BankAccountType\updateRequest;
use App\Bank_account_type;
use Session;

class BankAccountTypeController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank_account_type = Bank_account_type::all();

        return view('pages.payments.bank_account_type.index', compact('bank_account_type'));
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
        $bank = Bank_account_type::create($data);
        Session::flash('message-success',' Bank Account Type '. $request->name.' creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bank_account_type $bank_account_type)
    {
        return response()->json($bank_account_type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank_account_type $bank_account_type)
    {
        return response()->json($bank_account_type);
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
        $bank_account_type = Bank_account_type::find($id);
        $data = $request->all();
        $bank_account_type->update($data);
        $bank_account_type->save();
        Session::flash('message-success',' Bank Account Type actualizado correctamente.');
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
