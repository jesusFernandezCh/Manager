<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BussinesLine extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id', 'name', 'risk_coefficient'
    ];

}
