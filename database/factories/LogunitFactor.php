<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Logunit;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Logunit::class, function (Faker $faker) {
    return [
        'name' 			    => $faker->company,
        'description'       => $faker->text($maxNbChars = 120),
        'active' 		    => $faker->randomElement($array = [ 0 , 1 ]),
    ];
});
