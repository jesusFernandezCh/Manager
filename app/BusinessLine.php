<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessLine extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id', 'name', 'risk_coefficient'
    ];


	/**
     * Get the user that owns the Operations.
     */
    public function operation()
    {
        return $this->hasMany('App\Operation');
    }
}
