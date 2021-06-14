<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Telefono;
use Faker\Generator as Faker;

$factory->define(Telefono::class, function (Faker $faker) {
    return [
        'numero'   			=> $faker->tollFreePhoneNumber,
        'status' 			=> 1,
    ];
});
