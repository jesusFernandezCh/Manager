<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use App\Operation;
use App\ShelfLife;
use App\Currency;
use App\ProductGen;

class OrderDetailController extends Controller
{
    private $order_details;
    private $operation;
    private $currency;

    /**
     * { function_description }
     *
     * @param      \App\Document  $document  The document
     */
    public function __construct(ProductGen $product_gen,Currency $currency, ShelfLife $shelflife, Operation $stmt, OrderDetail $order_details)
    {
        $this->order_details = OrderDetail::all();
        $this->operation    = $stmt;    
        $this->shelflife    = $shelflife;    
        $this->currency    = Currency::get()->pluck('code', 'id');
        $this->value    = Currency::get();
        $this->product_gen    = ProductGen::get();
           
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_details = OrderDetail::all();
        $topMenu    = 'pages.operation.topMenu';
        

        return view('pages.operation.orderDetail.index', compact('order_details','topMenu'));
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
        $topMenu    = 'pages.operation.topMenu';
        $operation      = Operation::get()->pluck('code','id');
        $shelflife      = ShelfLife::get()->pluck('name','id');
        $currency = $this->currency->all();
        $value = $this->value->all();
        $product_gen = $this->product_gen->all();

        foreach ($product_gen as $key => $product_gen) {
            $product[$product_gen->id]= $product_gen->Products->line.' - ' .$product_gen->gen.' - '.$product_gen->basic_spec.' - '.$product_gen->cold_chain;
        }

        $var = __('Selected..');
        $currency = array('' => $var) + $currency;
        return view('pages.operation.orderDetail.create',compact('topMenu','admin','create','operation','shelflife','currency', 'value','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
