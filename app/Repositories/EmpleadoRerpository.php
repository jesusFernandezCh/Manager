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
    private $nomenclador;

    public function __construct()
    {
        $this->stmt = new Empleado();
        $this->nomenclador = new NomencladorRerpository();
        $this->persona = new PersonaRerpository();
        $this->direccion = new DireccionRerpository();
        $this->correo = new CorreoRerpository();
    }

    public function getModel()
    {
        return $this->stmt;
    }

    public function getCombos()
    {
        $grupoSanguineo = $this->nomenclador->getAll()->where('tipo',3)->pluck('valor','codigo')->prepend('Grupo Sanguineo',-1);
        $tallaCamisa    = $this->nomenclador->getAll()->where('tipo',8)->pluck('valor','codigo')->prepend('Camisa',-1);
        $tallaPantalon  = $this->nomenclador->getAll()->where('tipo',9)->pluck('valor','codigo')->prepend('Pantalon',-1);
        $tallaCalzado   = $this->nomenclador->getAll()->where('tipo',10)->pluck('valor','codigo')->prepend('Calzado',-1);
        $estados        = $this->nomenclador->getAll()->where('tipo',107)->pluck('valor','codigo')->prepend('Estados',-1);
        $municipios     = $this->nomenclador->getAll()->where('tipo',108)->pluck('valor','codigo')->prepend('Municipios',-1);
        $parroquias     = $this->nomenclador->getAll()->where('tipo',109)->pluck('valor','codigo')->prepend('Parroquias',-1);
        $cargos         = $this->nomenclador->getAll()->where('tipo',2)->pluck('valor','codigo')->prepend('Cargos',-1);

        return $array = [
            'grupoSanguineo'    => $grupoSanguineo,
            'tallaCamisa'       => $tallaCamisa,
            'tallaPantalon'     => $tallaPantalon,
            'tallaCalzado'      => $tallaCalzado,
            'estados'           => $estados,
            'municipios'        => $municipios,
            'parroquias'        => $parroquias,
            'cargos'            => $cargos
        ];

    }

    /**
     * [nuevoRegistro description]
     * @param   [type]  $data  [$data description]
     * @return  [type]         [return description]
     */
    public function nuevoRegistro($data)
    {
        //Crea el registro de la dirección
        $direccion = $this->direccion->create($data);
        $data = Arr::add($data,'direccion_habitacion',$direccion->id);
        //crea registro de persona contacto
        $contacto = [
            'p_nombre'      => $data->p_nombre2,
            'p_apellido'    => $data->p_apellido2,
            'cedula'        => $data->cedula.$data->ct
        ];
        $personaContacto = $this->persona->create($contacto);
        $data = Arr::add($data,'persona_contacto',$personaContacto->id);
        //Crea el registro de persona empleada
        $persona = $this->persona->create($data);
        $data = Arr::add($data,'persona',$persona->id);
        //Crea registro de correo;
        $correos = [
            'correo' => $data->correo,
            'correo' => $data->correo2
        ];
        $correo = $this->correo->registrar($correos);
        $data = Arr::add($data,'correo',$correo->id);
        //Crea registro de empleado
        $empleado = $this->create($data);
        $telefonos = [
            'numero' => $data->telefono,
            'numero' => $data->telefono2
        ];
                
    }

}
