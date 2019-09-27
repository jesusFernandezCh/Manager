<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationBudget extends Model
{
    protected $fillable = [
       'operation_id','order_quantity','order_sale','order_sale_currency_id','order_sale_currency_change','order_sale_usd','order_purchase','order_purchase_currency_id','order_purchase_change','order_purchase_usd','total_est_charger','comtopay','comtoreceive','usd_budget'
    ];
}
