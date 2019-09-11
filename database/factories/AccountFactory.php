<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Account;
use App\AccountCategory;
use App\Country;
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


$factory->define(Account::class, function (Faker $faker) {
    return [
        'name' 				  	=> $faker->company,
        'identification' 	  	=> $faker->catchPhrase,
        // 'account_category_id' 	=> AccountCategory::all()->random()->id,
        'address'				=> $faker->address,
        'country_id'			=> Country::all()->random()->id,
        'phone'					=> $faker->tollFreePhoneNumber,
        'email'					=> $faker->email,
    ];
});
 