<?php

namespace App\Repositories;

use App\Model\Persona;

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
