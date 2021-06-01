<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'foto', 'ct', 'fecha_ingreso', 'status',
    ];

    /**
     * [usuario relación de 1:N]
     * @return  [type]  [return description]
     */
    public function usuario()
    {
        return $this->hasMany('App\User');
    }
    /**
     * [persona relación 1:1]
     * @return  [type]  [return description]
     */
    public function persona()
    {
        return $this->hasOne('App\User');
    }
    /**
     * [empleado description]
     * @return  [type]  [return description]
     */
    public function correo()
    {
        return $this->hasMay('App\models\Correo','id');
    }
}
