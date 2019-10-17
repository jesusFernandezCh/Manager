<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Payment\CreateRequest;
use App\Http\Requests\Payment\updateRequest;
use App\Bank_transaction;
use App\Bank;
use App\Payment;
use App\Operation;
use Session;

class PaymentsController extends Controller
{
    private $bank_transaction;
    private $payment;

    public function __construct(Operation $operation, Bank_transaction $bank_transaction, Payment $payment)
    {
        $this->payment = $payment;
        $this->bank_transaction = $bank_transaction;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $payment = Payment::all();
        $queryOperation = Operation::all();
        foreach ($queryOperation as $key => $value) {
            $operation[$value->id]= $value->code.' - '.$value->Supplier->name. ' - '.$value->s_incoterm_place.'$';
        }
        
        $type = [
            '1' => 'ABONO',
            '2' => 'PAGO TOTAL',
        ];
        $bank_transaction = Bank_transaction::where('amount', '>', '0')->get();
        
        $showBank = Bank_transaction::all();

        $bank = Bank::all();
        if ($bank == '[]') {
            $banks[0] = "Debe agregar una transacción bancaria"; 
        }else {
            foreach ($bank as $key => $value) {
                $banks[$value->id]= $value->name;
               
            }
        }



        if ($showBank == '[]') {
            $cod1[0] = "Debe agregar una transacción bancaria"; 
        }else {
            foreach ($showBank as $key => $value) {
                $reference[$value->id]= $value->reference;
                $date[$value->id]= date('Y/m/d', strtotime($value->date));
            }
        }


        if ($bank_transaction == '[]') {
            $cod[0] = "Debe agregar una transacción bancaria"; 
        }else {
            foreach ($bank_transaction as $key => $value) {
                $cod[$value->id]= $value->reference.' - '.date('Y/m/d', strtotime($value->date)) .' - '.$value->amount.'$'; 
            }
        }
        $var = __('Selected..');
        $cod = array('' => $var) + $cod;
        $type = array('' => $var) + $type;
        $operation = array('' => $var) + $operation;

        return view('pages.payments.index',compact('operation','type','cod','payment','reference','date','banks'));
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

    public function verifyBalance(Request $request)
    {
        $bank_transaction = Bank_transaction::find($request->bank_trans);
        
        if ($request->amount > $bank_transaction->amount) {
            return response(
                'El monto asignado no puede ser mayor al de la transacción', 
                400
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $consulta = Bank_transaction::find($request->transaction_id);
        $operation = Operation::where('id', $request->operation_id)->get();
        $place = Operation::find($request->operation_id);
        $place->s_incoterm_place = $operation[0]->s_incoterm_place - $request->amount;
        $place->save();

        $data = $request->all();

        $data['amount_before'] = $operation[0]->s_incoterm_place;
        $data['amount_after'] = $operation[0]->s_incoterm_place - $request->amount;
        $data['before'] = $consulta->amount;
        $data['after'] = $consulta->amount - $request->amount;
        
        $payment = Payment::create($data);
        Session::flash('message-success',' Payment creado correctamente.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return response()->json($payment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return response()->json($payment);
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
        //
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
