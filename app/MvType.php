<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MvType extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'concept',
    ];
}
