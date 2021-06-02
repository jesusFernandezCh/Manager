<?php

namespace App\Repositories;

use App\Models\Correo;

class CorreoRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new Correo();
    }

    public function getModel()
    {
        return $this->stmt;
    }
}
