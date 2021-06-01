<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Models\Correo;
use App\Models\Nomenclador;
use Faker\Generator as Faker;

$factory->define(Correo::class, function (Faker $faker) {
    return [
        'direccion' => $faker->email,
        'status'    => '1',
        'tipo'      => Nomenclador::all()->where('tipo',7)->random()->id,
    ];
});
