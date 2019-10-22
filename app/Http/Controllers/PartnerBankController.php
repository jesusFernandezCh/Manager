<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartnerBank\CreateRequest;
use App\Http\Requests\PartnerBank\updateRequest;
use App\Account;
use App\Currency;
use App\Partner_bank;
use Session;


class PartnerBankController extends Controller
{
    
    private $company;
    private $partner_bank;
    private $currency;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(Account $company, Currency $currency, Partner_bank $partner_bank)
    {
        $this->company = Account::get()->pluck('name', 'id');
        $this->partner_bank = Partner_bank::all();
        $this->currency = Currency::get()->pluck('code', 'id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = $this->company->all();
        $currency = $this->currency->all();
        $partner_bank = $this->partner_bank->all();

        $var = __('Selected..');
        $company = array('' => $var) + $company;
        $currency = array('' => $var) + $currency;
        return view('pages.payments.partner_bank.index', compact('company','currency','partner_bank'));
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
        $partner = Partner_bank::create($data);
        Session::flash('message-success',' Partner Bank creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Partner_bank $partner_bank)
    {
        return response()->json($partner_bank);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner_bank $partner_bank)
    {
        return response()->json($partner_bank);
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
        $partner = Partner_bank::find($id);
        $data = $request->all();
        if (empty($data['curren_account'])) {
            $data['curren_account'] = null;
        }
        $partner->update($data);
        $partner->save();
        Session::flash('message-success',' Partner Bank actualizado correctamente.');
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
