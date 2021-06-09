<?php

namespace App\Models;

use App\models\Persona;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'foto', 'ct', 'cargo','fecha_ingreso', 'status', 'persona', 'persona_contacto', 'correo', 'telefono'
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
        return $this->belongsTo(Nomenclador::class,'cargo');
    }

    /**
     * [Telefonos relación de N:N]
     * @return  [type]  [return description]
     */
    public function Telefonos()
    {
        return $this->belonToMany(Telefono::class,'telefono')->withPivot('telefono_id');
    }

}
