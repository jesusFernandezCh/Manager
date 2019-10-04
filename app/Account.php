<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
