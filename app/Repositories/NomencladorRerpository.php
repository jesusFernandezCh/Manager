<?php

namespace App\Repositories;

use App\Models\Nomenclador;

class NomencladorRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __constructor()
    {
        $this->stmt = new Nomenclador();
    }

    /**
     * [getModel description]
     * @return  [type]  [return description]
     */
    public function getModel()
    {
        return $this->stmt;
    }
}
