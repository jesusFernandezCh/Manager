<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreightLine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shipping_line',
    ];
}
