<?php

namespace App\Http\Controllers;

use App\Http\Requests\Empleado\CreateRequest;
use App\Models\Direccion;
use App\Models\Nomenclador;
use App\Repositories\CorreoRerpository;
use App\Repositories\DireccionRerpository;
use App\Repositories\EmpleadoRerpository;
use App\Repositories\NomencladorRerpository;
use App\Repositories\PersonaRerpository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Session;

class EmpleadoController extends Controller
{

    private $stmt;
    private $nomenclador;

    private $grupo_Sanguineo;

    public function __construct(
        EmpleadoRerpository $repository,
        Nomenclador $repoNomenclador
        )
    {
        $this->stmt = $repository;
        $this->nomenclador = $repoNomenclador;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados  = $this->stmt->getAll();
        $combos     = $this->stmt->getCombos();
        return view('pages.empleado.index', compact('empleados','combos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('pase');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->stmt->nuevoRegistro($data);
        $request->session()->flash('message-success', $request->p_nombre.' '.$request->p_apellido.' fue registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
