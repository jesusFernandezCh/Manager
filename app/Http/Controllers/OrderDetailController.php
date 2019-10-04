<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use App\Operation;
use App\ShelfLife;
use App\Currency;

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
    public function __construct(Currency $currency, ShelfLife $shelflife, Operation $stmt, OrderDetail $order_details)
    {
        $this->order_details = OrderDetail::all();
        $this->operation    = $stmt;    
        $this->shelflife    = $shelflife;    
        $this->currency    = Currency::get()->pluck('code', 'id');
           
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
        $admin      = false;
        $create     = true;
        $topMenu    = 'pages.operation.topMenu';
        $operation      = Operation::get()->pluck('code','id');
        $shelflife      = ShelfLife::get()->pluck('name','id');
        $currency = $this->currency->all();

        return view('pages.operation.orderDetail.create',compact('topMenu','admin','create','operation','shelflife','currency'));
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
