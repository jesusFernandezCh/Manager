<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use App\DocStatus;
use App\Account;
use App\Operation;
use App\ShelfLife;
use App\Currency;
use App\OrderProduct;
use App\OperationBudget;
use App\ProductGen;
use Session;

class OrderDetailController extends Controller
{
    private $order_details;
    private $operation;
    private $currency;
    private $route;
    private $status;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(DocStatus $status, ProductGen $product_gen,Currency $currency, ShelfLife $shelflife, Operation $stmt, OrderDetail $order_details)
    {
        $this->order_details = $order_details;
        $this->operation    = $stmt;    
        $this->shelflife    = $shelflife;
        $this->route    = 'pages.operation.topMenu';    
        $this->currency    = Currency::get()->pluck('code', 'id');
        $this->value    = Currency::get();
        $this->product_gen    = ProductGen::get();
        $this->status   = $status->all()->pluck('name', 'id');
           
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_details = OrderDetail::all();
        
        return view('pages.operation.orderDetail.index', compact('order_details'));
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
        for ($i = 0; $i < count($request->product); $i++) {
            
            $order_product = new OrderProduct;
            $order_product->operation_id = $request->operation_id;
            $order_product->order_quantity = $request->order_quantity[$i];
            $order_product->product = $request->product[$i];
            $order_product->specifications = $request->specifications[$i];      
            $order_product->packaging = $request->packaging[$i];
            $order_product->brand = $request->brand[$i];
            $order_product->plant = $request->plant[$i];
            $order_product->shelflife_id = $request->shelf_life[$i];
            $order_product->purchase_price = $request->purchase_price[$i];
            $order_product->est_purchase_sale = $request->est_purchase_sale[$i];
            $order_product->sale_price = $request->sale_price[$i];
            $order_product->est_sale = $request->est_sale[$i];

            $order_product->save();

            $order_details = new OrderDetail;
            $order_details->operation_id = $request->operation_id;

            $order_details->save();

            $order_budget = new OperationBudget;
            $order_budget->operation_id = $request->operation_id;
            $order_budget->order_quantity_budget = $request->order_quantity_budget;
            $order_budget->order_sale = $request->order_sale;
            $order_budget->order_sale_currency_id = $request->order_sale_currency_id;      
            $order_budget->order_sale_currency_change = $request->order_sale_currency_change;
            $order_budget->order_sale_usd = $request->order_sale_usd;
            $order_budget->order_purchase = $request->order_purchase;
            $order_budget->order_purchase_currency_id = $request->order_purchase_currency_id;
            $order_budget->order_purchase_change = $request->order_purchase_change;
            $order_budget->order_purchase_usd = $request->order_purchase_usd;
            $order_budget->total_est_charges = $request->total_est_charges;
            $order_budget->est_charges = $request->est_charges;
            $order_budget->comtopay = $request->comtopay;
            $order_budget->comtoreceive = $request->comtoreceive;
            $order_budget->usd_budget = $request->usd_budget;

            $order_budget->save();

            Session::flash('message-success',' Order Details creado correctamente.');   
            return back();

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($operation)
    {
        //consulta si existe registro asociados a la operación 
        
        $order_details = $this->order_details->where('operation_id',$operation)->first();
        if (isset($order_details->id)) {
            //si existe llama a la funcion edit
            return $this->edit($order_details);
            //caso contrario muestra el formulario para crearlo
        }else{
            $operation      = $this->operation->find($operation);
            $admin          = false;
            $create         = true; 
            $route  = $this->route;
            $product_gen = $this->product_gen->all();
            $shelflife      = ShelfLife::get()->pluck('name','id');
            $value = $this->value->all();
            $currency = $this->currency->all();



            $var = __('Selected..');
            $currency = array('' => $var) + $currency;

            foreach ($product_gen as $key => $product_gen) {
            $product[$product_gen->id]= $product_gen->Products->line.' - ' .$product_gen->gen.' - '.$product_gen->basic_spec.' - '.$product_gen->cold_chain;
            }

            return view('pages.operation.orderDetail.create',compact("route","admin","create",'operation','product_gen','shelflife','value','currency','product'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetail $order_details)
    {
            $create = true;
            $admin  = false;
            $route  = $this->route;
            $status = $this->status;
            $operation = Operation::find($order_details->operation_id);
            $product_gen = $this->product_gen->all();
            $shelflife      = ShelfLife::get()->pluck('name','id');
            $order = OrderProduct::where('operation_id', $operation->id)->get();
            $value = $this->value->all();
            $currency = $this->currency->all();
            $order_budget = OperationBudget::where('operation_id', $operation->id)->get();

            

            foreach ($product_gen as $key => $product_gen) {
            $product[$product_gen->id]= $product_gen->Products->line.' - ' .$product_gen->gen.' - '.$product_gen->basic_spec.' - '.$product_gen->cold_chain;
            }

            return view('pages.operation.orderDetail.edit',compact('order_budget','currency','value','order','shelflife',"route","admin","create",'operation','status','product'));
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
