<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPmtTerm extends Model
{
     /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'payment_terms', 'capital_at_risk'
   ];
  
}
