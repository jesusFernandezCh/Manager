<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Caffeinated\Shinobi\Models\Permission;
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

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'name' => $faker->shuffle($array = array('Create', 'Update', 'View', 'Delete')),
        'slug' => $faker->shuffle($array = array('create', 'update', 'view', 'delete')),
        'description'  => $faker->randomElement($array = array ('active','inactive','suspended')),
    ];
});