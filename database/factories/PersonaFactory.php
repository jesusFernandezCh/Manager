<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\models\Persona;
use Faker\Generator as Factory;

$faker = Faker\Factory::create('es_ES'); 

$factory->define(Persona::class, function (Factory $faker) {
    return [
        'cedula' => $faker->ean8,
        'p_nombre' => $faker->firstName,
        's_nombre' => $faker->firstName,
        's_apellido' => $faker->lastName,
        'p_apellido' => $faker->lastName,
        'fecha_nacimiento' => $faker->date,
        'sexo' => $faker->randomElement($array = array ('Femenina','Masculino')),
        'direccion' => $faker->address,
        'grupo_sanguineo' => $faker->stateAbbr,
        'status' => $faker->randomElement($array = array ('activo','inactivo')),
        'imagen' => 'default.png'
    ];
});
