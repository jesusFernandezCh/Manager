<?php

namespace App\Repositories;

use App\Models\Direccion;

class DireccionRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new Direccion();
    }

    public function getModel()
    {
        return $this->stmt;
    }
}
