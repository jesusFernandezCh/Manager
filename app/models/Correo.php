<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    public $timestamps = false;
    protected $table = 'correos';

    protected $fillable = [
        'direccion', 'status', 'tipo'
    ];


    /**
     * [empleado description]
     * @return  [type]  [return description]
     */
    public function empleado()
    {
        return $this->belongsTo('App\models\Empleado');
    }
}
