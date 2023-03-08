<?php

namespace App\Http\Controllers;
use App\ShipDetails;
use App\Operation;
use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Requests\ShipDetails\RequestUpdate;
// use App\Http\Requests\OperationShip\OperationShipRequest;
use Session;

class ShipDetailsController extends Controller
{
    private $stmt;
    private $operation;
    private $productsAsoc;

    public function __construct(ShipDetails $shipDetails, Operation $operation, OrderProduct $productsAsoc)
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
        $data = $request->all();
        //sumatoria del valores nb_package, net_qty, gross_weight, para campos total_pcs, total_quantity, total_gw
        for ($i = 0; $i < count($request->product_id); $i++)
        {
            $data['total_pcs'] = $data['total_pcs'] + $request->nb_package[$i];
            $data['total_quantity'] = $data['total_quantity'] + $request->net_qty[$i];
            $data['total_gw'] = $data['total_gw'] + $request->gross_weight[$i];
        }
        $shipDetails = $this->stmt->create($data);
        Session::flash('message-success',' ShipDetails '. $request->input('vessel').' '.trans('messages.created'));
        return $this->updateProduct($request);
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
            $productsAsoc   = OrderProduct::Where('operation_id',$operation->id)->get();
            $topMenu    = "pages.operation.topMenu";
            $admin      = false;
            $create     = true;
            return view('pages.operation.shipDetails.create',compact('operation','products','topMenu','admin','create','productsAsoc'));
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
        $productsAsoc   = OrderProduct::Where('operation_id',$operation->id)->get();
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
    public function update(RequestUpdate $request, ShipDetails $shipDetail)
    {
        $data = $request->all();
        //Si se modifica la fecha actual se guarda en update_eta_on
        if($request->eta != $shipDetail->eta){
            $data['update_eta_on'] = date('Y-m-d');
        };

        //sumatoria del valores nb_package, net_qty, gross_weight, para campos total_pcs, total_quantity, total_gw
        $data['total_pcs']      = 0.00;
        $data['total_quantity'] = 0.00;
        $data['total_gw']       = 0.00;

         for ($i = 0; $i < count($request->product_id); $i++)
         {
             $data['total_pcs'] = $data['total_pcs'] + $request->nb_package[$i];
             $data['total_quantity'] = $data['total_quantity'] + $request->net_qty[$i];
             $data['total_gw'] = $data['total_gw'] + $request->gross_weight[$i];
         }

        $shipDetail->update($data);
        Session::flash('message-success',' ShipDetails '. $request->input('vessel').' '.trans('messages.created'));
        return $this->updateProduct($request);
    }

    /**
     * Guarda los datos (nb_package,net_qty,gross_weight)
     * de los productos asociados a la operacion
     * @param Request $request
     * @return void
     */
    public function updateProduct(Request $request)
    {
        //recorre los datos en forma de array desde recibidos de un data table
        for ($i = 0; $i < count($request->product_id); $i++)
        {
            $product = $this->productsAsoc->find($request->product_id[$i]);
            $product->nb_package = $request->nb_package[$i];
            $product->net_qty = $request->net_qty[$i];
            $product->gross_weight = $request->gross_weight[$i];
            $product->save();
        }
        return response()->json(['page'=>'shipDetails']);
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
