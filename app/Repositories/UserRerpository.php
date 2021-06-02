<?php

namespace App\Repositories;
use App\User;

class UserRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
    {
        $this->stmt = new User();
    }

    /**
     * [getModel Intacia el modelo para el repositorio]
     * @return  [type]  [return description]
     */   
    public function getModel()
    {
        return $this->stmt;
    }
}
