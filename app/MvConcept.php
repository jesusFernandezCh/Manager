<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MvConcept extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'concept',
    ];
}
