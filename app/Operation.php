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
       'code','total_amount','description','account_id','operator_id','operations_status_id'
   ];

    /**
    * Get the user that owns the Account.
    */
   
   /**
     * Get the account for the blog account.
     */
    public function account()
    {
        return $this->belongsTo('App\Account', 'account_id');
    }

    /**
     * Get the account for the blog operator.
     */
    public function operator()
    {
        return $this->belongsTo('App\User', 'operator_id');
    }

    /**
     * Get the account for the blog status.
     */
    public function operationStatus()
    {
        return $this->belongsTo('App\OperationStatus', 'operations_status_id');
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

    public function FunctionName($value='')
    {
        # code...
    }

}
