<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'operation_id','amount_before','amount_after', 'transaction_id','amount','type','before','after'
    ];

    public function banks()
    {
       return $this->hasMany('App\Bank', 'bank_id');
    }
    public function Transaction()
    {
       return $this->belongsTo('App\Bank_transaction', 'transaction_id');
    }
    public function operation()
    {
       return $this->belongsTo('App\Operation', 'operation_id');
    }
    public function supplier()
    {
        return $this->belongsTo('App\Account', 'supplier_id');
    }

    

}
