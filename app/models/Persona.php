<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'cedula','p_nombre','p_apellido','s_nombre','s_apellido','fecha_nacimiento','sexo','direccion','grupos_sanguineo','status'
    ];
    
      /**
     * [empleado description]
     * @return  [type]  [return description]
     */
    public function direccion()
    {
        return $this->hasOne('App\models\Direccion', 'id');
    }


    public function fullName()
    {
        return $this->p_nombre.' '.$this->p_apellido; 
    }
    
}

