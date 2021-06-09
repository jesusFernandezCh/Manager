<?php

namespace App\Repositories;

use App\Models\Persona;

class PersonaRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new Persona();
    }

    public function getmodel()
    {
        return $this->stmt;
    }
}
