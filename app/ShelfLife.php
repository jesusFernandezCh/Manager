<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShelfLife extends Model
{
    protected $table = 'shelf_lifes';

    protected $fillable = [
        'name',
    ];
}
