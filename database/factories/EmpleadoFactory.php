<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Models\Correo;
use App\Models\Empleado;
use App\Models\Nomenclador;
use App\models\Persona;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'ct'                    => $faker->numerify('CT #####'),
        'cargo'                 => Nomenclador::all()->where('tipo',2)->random()->id,
        'fecha_ingreso'         => $faker->date,
        'status'                => $faker->randomElement($array = array ('active','inactive','suspended')),
        'persona'               => Persona::all()->random()->id,
        'persona_contacto'      => Persona::all()->random()->id,
        'correo'                => Correo::all()->random()->id,
    ];
});
