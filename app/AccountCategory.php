<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'active'
    ];

    /**
     * Get the user that owns the Account.
     */
    public function accounts()
    {
        return $this->belongsToMany('App\Account', 'categories_accounts', 'category_id', 'account_id');
    }

}
