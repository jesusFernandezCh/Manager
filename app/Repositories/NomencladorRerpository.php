<?php

namespace App\Repositories;

use App\Models\Nomenclador;

class NomencladorRerpository extends BaseRerpository implements IRerpository
{
    private $stmt;

    public function __construct()
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
    /**
     * [comboBaox description]
     *
     * @param   [type]  $id    [$id description]
     * @param   [type]  $tipo  [$tipo description]
     *
     * @return  [type]         [return description]
     */
    public function comboBox($id, $tipo)
    {
        $arreglo = Nomenclador::all()
        ->where('nomenclador','=',$id)
        ->where('tipo','=',$tipo)
        ->pluck('valor','id');
        foreach ($arreglo as $code => $name) {
            echo "<option value=\"$code\">$name</option>";
        }  
    }
}
