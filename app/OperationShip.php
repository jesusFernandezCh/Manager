<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OperationShip extends Model
{
     /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
    'operation',
    'supplier_Admin',
    'supplier_ops',
    'date_availability',
    'labels_received',
    'labels_oK',
    'cust_admin',
    'cust_ops',
    'docs_instruction',
    'insp_ref',
    'licence_ok',
    'date_appointment',
    'pickup_location',
    'instruction_inland',
    'freight_rate',
    'cut_off_docs',
    'cut_off_cargo',
    'booking_ref',
    'est_vessel',
    'est_etd',
    'est_eta'
];
    /**
     * [FunctionName description]
     * @param [type] $value [description]
     */
    public function scopeSupplier($query, $var)
    {
         return DB::table('account_contacts')
            ->join('accounts', 'accounts.id', '=', 'account_contacts.account_id')
            ->select('account_contacts.id','account_contacts.fullname')
            ->where('accounts.id', $var)
            ->pluck('fullname', 'id');
    }
}
