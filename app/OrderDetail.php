<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
       'operation_id','product','specifications','packaging','brand','plant','shelflife_id','purchase_price','est_purchase_sale','sale_price','est_sale'
    ];
}
