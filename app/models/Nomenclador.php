<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nomenclador extends Model
{
    protected $table = 'nomencladores';

    protected $fillable = [
        'valor','tipo','codigo','status'
    ];
}
