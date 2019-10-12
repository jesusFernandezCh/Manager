<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'operation_id', 'transaction','amount','type','before','after'
    ];

    public function banks()
    {
       return $this->hasMany('App\Bank', 'bank_id');
    }
    public function Transaction()
    {
       return $this->belongsTo('App\Bank_transaction', 'transaction');
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
