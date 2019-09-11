<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountMeta extends Model
{
  /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'account_id', 'account_meta_type_id', 'value'
   ];

   /**
    * Get the account for the blog account_type.
    */
   public function accounts()
   {
       return $this->belongsTo('App\Account', 'account_id');
   }

   /**
    * Get the account for the blog account_type.
    */
   public function accountsMetaTypes()
   {
       return $this->belongsTo('App\AccountMetaType', 'account_meta_type_id');
   }
}
