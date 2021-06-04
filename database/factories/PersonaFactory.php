<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Models\Direccion;
use App\Models\Nomenclador;
use App\models\Persona;
use Faker\Generator as Factory;

$faker = Faker\Factory::create('es_VE'); 

$factory->define(Persona::class, function ($faker) {
    return [
        'cedula'            => $faker->ean8,
        'p_nombre'          => $faker->firstName,
        's_nombre'          => $faker->firstName,
        's_apellido'        => $faker->lastName,
        'p_apellido'        => $faker->lastName,
        'fecha_nacimiento'  => $faker->date,
        'sexo'              => $faker->randomElement($array = array ('Femenina','Masculino')),
        'direccion'         => Direccion::all()->random()->id,
        'grupo_sanguineo'   => Nomenclador::all()->where('tipo',3)->random()->valor,
        'status'            => $faker->randomElement($array = array ('activo','inactivo')),
        'imagen'            => 'default.png',
        'talla_camisa'      => Nomenclador::all()->where('tipo',8)->random()->id,
        'talla_pantalon'    => Nomenclador::all()->where('tipo',9)->random()->id,
        'talla_calzado'     => Nomenclador::all()->where('tipo',10)->random()->id,
    ];
});
