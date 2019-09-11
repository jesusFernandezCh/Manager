<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\AccountCategory;
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


$factory->define(AccountCategory::class, function (Faker $faker) {
    return [
        'name' 			=> $faker->randomElement($array = array ('Customer','Provider','Partner')),
        'description' 	=> $faker->catchPhrase,
        'active' 		=> $faker->randomElement($array = [ 0 , 1 ]),
    ];
});
 