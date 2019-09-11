<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'active'
    ];

     /**
     * Get the user that owns the Account.
     */
    public function account()
    {
        return $this->hasMany('App\Account');
    }

     /**
     * Get the user that owns the Ports.
     */
    public function ports()
    {
        return $this->hasMany('App\Port');
    }
}
