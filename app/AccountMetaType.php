<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountMetaType extends Model
{
  /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'metatype', 'required', 'description', 'active'
   ];

}
