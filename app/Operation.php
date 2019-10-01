<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Operation extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'code',
       'date_order',
       'status_id',
       'business_line_id',
       'principal_id',
       'supplier_id',
       'supplier_commercial',
       'proforma',
       'cus_commercial_id',
       'cus_ref',
       'purchase_by',
       'su_po_signed',
       'sale_by',
       'cu_po_signed',
       'purchase_broker_id',
       'p_broker_com_mt',
       'sale_broker_id',
       's_broker_com_mt',
       'supplier_bank_id',
       'customer_bank_id',
       'p_modality',
       'p_advanced',
       'p_days',
       'payment',
       's_advanced',
       's_days',
       'purchase_incoterm',
       'purchase_curr',
       'p_incoterm_place',
       'sale_incoterm',
       'sale_curr',
       's_incoterm_place',
       'ship_from',
       'dead_line_ship',
       'cargo_unit',
       'log_unit',
       'nb_log_units',
       'pol_id',
       'origin',
       'pod_id',
       'final_destination',
       'est_freight_u',
       'est_inland_u',
       'est_legal_u',
       'add_instructions',
       'comments'
   ];

    /**
    * Get the user that owns the Account.
    */
   public function businessLines()
   {
       return $this->belongsTo('App\BusinessLine', 'business_line_id');
   }

   /**
     * Get the account for the blog account.
     */
    public function account()
    {
        return $this->belongsTo('App\Account', 'principal_id');
    }

    /**
     * Get the account for the blog operator.
     */
    public function operator()
    {
        return $this->belongsTo('App\User', 'purchase_by');
    }

    /**
     * Get the account for the blog status.
     */
    public function status()
    {
        return $this->belongsTo('App\OperationStatus', 'status_id');
    }

    /**
     * [scopePrincipals description]
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeCustomPluck($query, $var)
    {
        return DB::table('accounts')
            ->join('categories_accounts', 'accounts.id', '=', 'account_id')
            ->join('account_categories', 'account_categories.id', '=', 'categories_accounts.category_id')
            ->select('accounts.id','accounts.name')
            ->where('account_categories.name',$var)
            ->pluck('name', 'id');
    }
    /**
     * [FunctionName description]
     * @param [type] $value [description]
     */
    public function scopeSupplier($query, $value)
    {
         return DB::table('account_contacts')
            ->join('accounts', 'accounts.id', '=', 'account_id')
            ->join('account_categories', 'account_categories.id', '=', 'categories_accounts.category_id')
            ->select('account_contacts.id','account_contacts.fullname')
            ->where('account_categories.name',$var)
            ->pluck('fullname', 'id');
    }

}
