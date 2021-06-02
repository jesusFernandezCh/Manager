<?php

namespace App\Repositories;

use App\Models\Telefono;

class TelefonoRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new Telefono();
    }

    public function getModel()
    {
        return $this->stmt;
    }
}
