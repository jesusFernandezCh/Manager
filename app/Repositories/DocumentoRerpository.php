<?php

namespace App\Repositories;

use App\Models\Documento;

class DocumentoRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new Documento();
    }

    public function getModel()
    {
        return $this->stmt;
    }
}
