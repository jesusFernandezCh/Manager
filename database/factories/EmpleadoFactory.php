<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\models\Persona;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'ct' => $faker->postcode,
        'cargo'=> $faker->randomElement($array = array ('','inactive','suspended')),
        'fecha_ingreso' => $faker->date,
        'status' => $faker->randomElement($array = array ('active','inactive','suspended')),
        'persona' => Persona::all()->random()->id,
        'persona_contacto' => Persona::all()->random()->id,
        'correo' => $faker->email
    ];
});
