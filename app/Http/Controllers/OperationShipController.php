<?php

namespace App\Http\Controllers;

use App\OperationShip;
use App\Operation;
use App\AccountContact;
use Illuminate\Http\Request;
use App\Http\Requests\OperationShip\OperationShipRequest;
use Illuminate\Support\Arr;
use Session;

class OperationShipController extends Controller
{
    private $operationShip;
    private $operation;
    
    public function __construct(OperationShip $stmt, Operation $operation)
    {
        $this->operationShip = $stmt;
        $this->operation     = $operation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $admin      = false;
        $create     = true; 
        $topMenu    = "pages.operation.topMenu";
        return view('pages.operation.operationShip.create',compact("topMenu","admin","create"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperationShipRequest $request)
    {
        $operationShip = $this->operationShip->create($request->all());
        Session::flash('message-success',' Inst-Ship Plain registrado correctamente.');
        return response()->json($operationShip);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function show($operation_id)
    {
        //consulta si existe registro asociados a la operación 
        $operationShip = $this->operationShip->where('operation',$operation_id)->first();
        if (isset($operationShip->id)) {
            //si existe llama a la funcion edit
            return $this->edit($operationShip);
            //caso contrario muestra el formulario para crearlo
        }else{
            $operation      = $this->operation->find($operation_id);
            $cnees          = $this->operationShip->Cnee($operation->customer_id);
            $supplier       = $this->operationShip->Supplier($operation->supplier_id);
            $customer       = $this->operationShip->Supplier($operation->customer_id);
            $admin          = false;
            $create         = true; 
            $topMenu        = "pages.operation.topMenu";
            return view('pages.operation.operationShip.create',compact("topMenu","admin","create",'operation','supplier','customer','cnees'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function edit(operationShip $operationShip)
    {
        $operation      = $this->operation->find($operationShip->operation);
        $cnees          = $this->operationShip->Cnee($operation->customer_id);
        $supplier       = $this->operationShip->Supplier($operation->supplier_id);
        $customer       = $this->operationShip->Supplier($operation->customer_id);
        $admin          = false;
        $create         = true; 
        $topMenu        = "pages.operation.topMenu";
        return view('pages.operation.operationShip.edit',compact('operationShip','topMenu','admin','create','operation','supplier','customer','cnees'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, operationShip $operationShip)
    {
        $data = $request->all();
        if(null == $request->input('labels_received')){$data = Arr::add($data,'labels_received', 0);}
        if(null == $request->input('labels_oK')){$data = Arr::add($data,'labels_oK', 0);}
        if(null == $request->input('licence_ok')){$data = Arr::add($data,'licence_ok', 0);}
        $operationShip->update($data);
        Session::flash('message-success',' Inst-Ship Plain actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\operationShip  $operationShip
     * @return \Illuminate\Http\Response
     */
    public function destroy(operationShip $operationShip)
    {
        //
    }
}
