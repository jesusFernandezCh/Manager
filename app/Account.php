<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id', 'name', 'identification', 'address','zipcode', 'country_id', 'phone', 'email','website'
    ];

    /**
     * Get the account for the blog category.
     */
    public function categories()
    {
        return $this->belongsToMany('App\AccountCategory', 'categories_accounts', 'account_id', 'category_id');
    }
    /**
     * Get the account for the blog country.
     */
    public function countries()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }
     /**
     * Get the user that owns the AccountMeta.
     */
    public function accountMeta()
    {
        return $this->hasMany('App\AccountMeta');
    }
     /**
     * Get the user that owns the Operations.
     */
    public function operations()
    {
        return $this->hasMany('App\Operation');
    }
    /**
    * Get the user that owns the DocsInstruction.
    */
    public function docsInstrucctions()
    {
        return $this->hasMany('App\DocsInstruction');
    }
    /**
    * Get the account for the blog accountCourriers.
    */
    public function accountCourriers()
    {
        return $this->hasMany('App\AccountCourrier');
    }
     /**
    * Get the account for the blog freightRates.
    */
    public function freightRates()
    {
        return $this->hasMany('App\FreightRate');
    }

     /**
     * [scopePrincipals description]
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopeCustomPluck($query, $var)
    {
        $col = DB::table('accounts')
            ->join('categories_accounts', 'accounts.id', '=', 'account_id')
            ->join('account_categories', 'account_categories.id', '=', 'categories_accounts.category_id')
            ->select('accounts.id','accounts.name')
            ->where('account_categories.name',$var)
            ->pluck('name', 'id');
        return $col->prepend(__('Selected...'), '');
    }
}
