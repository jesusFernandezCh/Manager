<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Caffeinated\Shinobi\Models\Role;
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

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' 			=> $faker->shuffle($array = array('Admin', 'Global', 'Office', 'Financial', 'Operador')),
        'slug' 			=> $faker->shuffle($array = array('admin', 'global', 'office', 'financial', 'operador')),
        'description'  	=> $faker->text($maxNbChars = 100),
    ];
});