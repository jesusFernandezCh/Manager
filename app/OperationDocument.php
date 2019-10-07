<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationDocument extends Model
{
    public $timestamps = false;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id',
        'operation_id',
        'doc_status_id',
        'date_docs_ok',
        'date_insured',
        'daate_legalized',
        'docs_modification',
        'date_telex',
        'courier_to_principal',
        'cp_ref',
        'cp_sent_on',
        'customer_mailing_a',
        'courier_to_customer',
        'cc_ref',
        'cc_sent_on',
        'cc_received_or',
        'cargo_released_on',
    ];

    /**
    * Get the user that owns the Operation.
    */
    public function operation()
    {
       return $this->belongsTo('App\Operation', 'operation_id');
    }

    /**
    * Get the user that owns the Operation.
    */
    public function docStatus()
    {
       return $this->belongsTo('App\DocStatus', 'docStatus_id');
    }

}