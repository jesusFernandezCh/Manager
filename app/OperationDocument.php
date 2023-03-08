<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'date_legalized',
        'docs_modification',
        'date_telex',
        'courrier_to_principal',
        'cp_ref',
        'cp_sent_on',
        'customer_mailing_a',
        'courrier_to_customer',
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

     /**
     * [scopePrincipals description]
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeCustomerMailingAddres($query, $var)
    {
        return DB::table('accounts_courriers')
            ->join('accounts', 'accounts.id', '=', 'account_id')
            ->select('accounts_courriers.id','accounts_courriers.address')
            ->where('accounts_courriers.account_id',$var)
            ->pluck('address', 'id');
    }

}