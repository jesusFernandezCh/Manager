<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currier extends Model
{
    protected $fillable = [
        'currier_name', 'description'
    ];
}
