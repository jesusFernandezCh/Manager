<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationShipTotal extends Model
{
    public $timestamps  = false;

    protected $fillable = [
        'operation_id',
        'description',
        'order_qty',
        'nb_package',
        'net_qty',
        'gross_weight',
    ];

    /**
    * Get the user that owns the Operation.
    */
    public function operation()
    {
       return $this->belongsTo('App\Operation', 'operation_id');
    }
}
