<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table = 'telefonos';

    protected $fillable = [
        'operadora','numero','tipo'
    ];


    /**
     * [Empleados relación de N:N]
     * @return  [type]  [return description]
     */
    public function Empleados()
    {
        return $this->belonToMany(Empleado::class,'empleado')->withPivot('empleado_id');
    }
}
