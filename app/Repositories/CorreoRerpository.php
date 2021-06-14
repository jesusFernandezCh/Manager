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
    /**
     * [registrar description]
     * @param   Array  $correos  [$correos arreglo de correo a registrar]
     * @return  [type]           [return description]
     */
    public function registrar(Array $correos)
    {
        foreach ($correos as $correo) {
			$this->getModel()->create($correo);
		}
		return $this;
    }
}
