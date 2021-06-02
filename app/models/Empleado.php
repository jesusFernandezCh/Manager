<?php

namespace App\Models;

use App\models\Persona;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'foto', 'ct', 'cargo','fecha_ingreso', 'status', 'persona', 'persona_contacto', 'correo'
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
    public function Persona()
    {
        return $this->belongsTo(Persona::class,'persona');
    }
    /**
     * [persona relación 1:1]
     * @return  [type]  [return description]
     */
    public function PersonaContacto()
    {
        return $this->belongsTo(Persona::class,'persona_contacto');
    }
    /**
     * [empleado description]
     * @return  [type]  [return description]
     */
    public function Correo()
    {
        return $this->hasMay(Correo::class,'correo');
    }
     /**
     * [empleado description]
     * @return  [type]  [return description]
     */
    public function Cargo()
    {
        return $this->hasMay(Nomenclador::class,'cargo','tipo');
    }

    /**
     * [getfull description]
     * @return  [type]  [return description]
     */
    public function getfull()
    {
        return collect([
            'foto'          => $this->Persona->foto,
            'p_nomber'      => $this->Persona->p_nombre,
            'p_apellido'    => $this->Persona->p_apellido,
            'sexo'          => $this->Persona->sexo,
            'fecha_nac'     => $this->Persona->fecha_nacimiento,
            'cedula'        => $this->Persona->cedula,
            'ct'            => $this->ct,
            'cargo'         => $this->cargo,
            'fecha_ingreso' => $this->fecha_ingreso,
            'status'        => $this->status,
            'correo'        => $this->correo
        ]);
    }
    
}
