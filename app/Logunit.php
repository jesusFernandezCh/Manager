<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logunit extends Model
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
   public function account()
   {
       return $this->hasMany('App\Account');
   }
}
