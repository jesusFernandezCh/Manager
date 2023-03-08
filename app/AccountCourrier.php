<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountCourrier extends Model
{
    protected $table    = 'accounts_courriers';
    public $timestamps  = false;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'account_id',
        'recipient',
        'address',
        'contact',
        'telf',
    ];

    /**
     * Get the account for the blog accounts.
     */
    public function account()
    {
        return $this->belongsTo('App\Account', 'account_id');
    }
}
