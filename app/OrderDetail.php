<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
       'operation_id'
    ];

    public function account()
    {
        return $this->belongsTo('App\Account', 'operetion_id');
    }

    
    public function status()
    {
        return $this->belongsTo('App\OperationStatus', 'status_id');
    }

}
