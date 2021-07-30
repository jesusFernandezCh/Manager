<?php

namespace App\Repositories;
use App\Models\Empleado;
use App\Models\Telefono;
use Illuminate\Support\Arr;

class EmpleadoRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;
    private $persona;
    private $direccion;
    private $correo;
    private $nomenclador;
    private $telefono;

    public function __construct()
    {
        $this->stmt = new Empleado();
        $this->nomenclador = new NomencladorRerpository();
        $this->persona = new PersonaRerpository();
        $this->direccion = new DireccionRerpository();
        $this->correo = new CorreoRerpository();
        $this->telefono = new TelefonoRerpository();
    }

    public function getModel()
    {
        return $this->stmt;
    }

    public function getCombos()
    {
        $grupoSanguineo = $this->nomenclador->getAll()->where('tipo',3)->pluck('valor','id')->prepend('Grupo Sanguineo',1);
        $tallaCamisa    = $this->nomenclador->getAll()->where('tipo',8)->pluck('valor','id')->prepend('Camisa',1);
        $tallaPantalon  = $this->nomenclador->getAll()->where('tipo',9)->pluck('valor','id')->prepend('Pantalon',1);
        $tallaCalzado   = $this->nomenclador->getAll()->where('tipo',10)->pluck('valor','id')->prepend('Calzado',1);
        $estados        = $this->nomenclador->getAll()->where('tipo',107)->pluck('valor','id')->prepend('Estados',1);
        $municipios     = $this->nomenclador->getAll()->where('tipo',108)->pluck('valor','id')->prepend('Municipios',1);
        $parroquias     = $this->nomenclador->getAll()->where('tipo',109)->pluck('valor','id')->prepend('Parroquias',1);
        $cargos         = $this->nomenclador->getAll()->where('tipo',2)->pluck('valor','id')->prepend('Cargos',1);

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
        //Registro nuemro de contacto
        $telefonoContacto = [
            'numero' => $data['telefono_contacto']
        ];
        $telefono = $this->telefono->create($telefonoContacto);

        //Registro de persona contacto
        $contacto = [
            'p_nombre'      => $data['p_nombre2'],
            'p_apellido'    => $data['p_apellido2'],
            'sexo'          => 'Indefinido',
            'cedula'        => $data['cedula'].$data['ct'],
            'talla_camisa'  => 1,
            'talla_pantalon'=> 1,
            'talla_calzado' => 1,
            'telefono1'     => $telefono->id,
            'telefono2'     => 1,
            'correo'        => 1
        ];

        $personaContacto = $this->persona->create($contacto);
        $data = Arr::add($data,'persona_contacto',$personaContacto->id);
        // dd($personaContacto);
        
        //Registro de correo personal;
        $correos = [
            'direccion' => $data['correo']
        ];
        // foreach ($correos as $correo) {
            $correo = $this->correo->create($correos);
            $data['correo'] = $correo->id;
        // }
        // dd($data);

        //registros números telefónicos
        for ($i=1; $i <3 ; $i++) { 
            $telf = $this->telefono->create($data);
            $data['telefono'.$i]= $telf->id;
        }
        // dd($data);

        //Crea el registro de la dirección
        $direccion = $this->direccion->create($data);
        $data = Arr::add($data,'direccion_habitacion',$direccion->id);
        // dd($direccion);

        //Registro de persona empleado
        $persona = $this->persona->create($data);
        $data = Arr::add($data,'persona',$persona->id);
        // dd($persona);

        //Crea registro de empleado
        $this->create($data);
    }
}
