<?php

namespace App\Http\Controllers;
use App\ShipDetails;
use App\Operation;
use App\OperationShipTotal;
use Illuminate\Http\Request;
use Session;

class ShipDetailsController extends Controller
{
    private $stmt;
    private $operation;
    private $productsAsoc;

    public function __construct(ShipDetails $shipDetails, Operation $operation, OperationShipTotal $productsAsoc)
    {
        $this->operation    = $operation;
        $this->stmt         = $shipDetails;
        $this->productsAsoc = $productsAsoc;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipDetails = $this->stmt->create($request->all());
        Session::flash('message-success',' ShipDetails '. $request->input('vessel').' '.trans('messages.created'));
        return response()->json($shipDetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShipDetails  $shipDetails
     * @return \Illuminate\Http\Response
     */
    public function show($operation_id)
    {
        //consulta si existe registro asociados a la operación
        $shipDetail = $this->stmt->where('operation_id',$operation_id)->first();
        if (isset($shipDetail->id)) {
            //si existe llama a la funcion edit
            return $this->edit($shipDetail);
            //caso contrario muestra el formulario para crearlo
        }else{
            $operation  = $this->operation->find($operation_id);
            $products   =  $this->stmt->Products();
            $topMenu    = "pages.operation.topMenu";
            $admin      = false;
            $create     = true;
            return view('pages.operation.shipDetails.create',compact('operation','products','topMenu','admin','create'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShipDetails  $shipDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipDetails $shipDetail)
    {
        $operation      = $this->operation->find($shipDetail->operation_id);
        $products       = $this->stmt->Products();
        $productsAsoc   = $this->productsAsoc->all()->where('operation_id',$shipDetail->operation_id);
        $topMenu        = "pages.operation.topMenu";
        $admin          = false;
        $create         = true;
        return view('pages.operation.shipDetails.edit',compact('shipDetail','operation','products','topMenu','admin','create','productsAsoc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShipDetails  $shipDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipDetails $shipDetail)
    {
        $shipDetail->update($request->all());
        Session::flash('message-success',' ShipDetails '. $request->input('vessel').' '.trans('messages.created'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShipDetails  $shipDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipDetails $shipDetail)
    {
        $shipDetail->delete();
        Session::flash('message-success',' ShipDetails '. $shipDetail->vessel.' '.trans('messages.deleted'));
    }
}
