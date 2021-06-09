<?php

namespace App\Repositories;
use App\Models\Empleado;
use Illuminate\Auth\Access\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Symfony\Component\HttpFoundation\JsonResponse;

class EmpleadoRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;
    private $persona;
    private $direccion;
    private $correo;

    public function __construct()
    {
        $this->stmt = new Empleado();
        $this->persona = new PersonaRerpository();
        $this->direccion = new DireccionRerpository();
        $this->correo = new CorreoRerpository();
    }

    public function getModel()
    {
        return $this->stmt;
    }


    public function nuevoRegistro($data)
    {
        $direccion = $this->direccion->create($data);
        $data = Arr::add($data,'direccion',$direccion->id);
        $persona = $this->persona->create($data);
        $data = Arr::add($data,'persona',$persona->id);
        $correo = $this->correo->create($data);
        $data = Arr::add($data,'correo',$correo->id);
        $empleado = $this->create($data);
        dd($empleado->pivot->telefono_id);
    }

}
