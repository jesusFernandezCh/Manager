<?php

namespace App\Repositories;
use App\Models\Empleado;
use Illuminate\Auth\Access\Response;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\JsonResponse;

class EmpleadoRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new Empleado();
    }

    public function getModel()
    {
        return $this->stmt;
    }

}
