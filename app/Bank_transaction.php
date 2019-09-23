<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_transaction extends Model
{
    protected $fillable = [
        'bank_id', 'amount','amount_init', 'reference','date','user','type'
    ];

    public function banks()
    {
       return $this->belongsTo('App\Bank', 'bank_id');
    }  

    public function Payments()
    {
       return $this->hasMany('App\Payment', 'transaction');
    }
    public function Users()
    {
       return $this->belongsTo('App\User', 'user');
    }
}
