<?php

namespace App\Repositories;

use App\Models\Cuenta;

class CuentaRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new Cuenta();
    }

    public function getModel()
    {
        return $this->stmt;
    }
}
