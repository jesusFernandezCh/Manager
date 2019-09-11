<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationStatus extends Model
{
	protected $table = 'operation_status';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'name','description'
    ];

     /**
     * Get the user that owns the operation.
     */
    public function operation()
    {
        return $this->hasMany('App\Operation');
    }
}
