<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    public $timestamps = false;
    protected $table = 'direccion';

    protected $fillable = [
       'estado', 'municipio', 'parroquia', 'detalles', 'codigo_postal'
    ];


    /**
     * [empleado description]
     * @return  [type]  [return description]
     */
    public function persona()
    {
        return $this->belongsTo('App\models\Persona','id');
    }
}
