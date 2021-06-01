<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Models\Direccion;
use App\Models\Nomenclador;
// use Faker\Generator as Faker;

$faker = Faker\Factory::create('es_VE'); 


$factory->define(Direccion::class, function ($faker) {
    return [
        'estado'   			=> Nomenclador::all()->where('tipo',107)->random()->id,
        'municipio' 		=> Nomenclador::all()->where('tipo',108)->random()->id,
        'parroquia' 		=> Nomenclador::all()->where('tipo',108)->random()->id,
		'detalles'         	=> $faker->address,
        'codigo_postal'     => '1030',
    ];
});
