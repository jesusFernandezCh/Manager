<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountContact extends Model
{
	public $timestamps = false;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id','fullname','account_id','phone_company','phone_mobile','email','departament','address','country_id', 'comments'
    ];

    /**
     * Get the account for the blog accounts.
     */
    public function accounts()
    {
        return $this->belongsTo('App\Account', 'account_id');
    }
    /**
     * Get the account for the blog country.
     */
    public function countries()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }

    /**
     * Get the user that owns the operation.
     */
    public function operation()
    {
        return $this->hasMany('App\Operation');
    }
}
