<?php

use Faker\Generator as Faker;
use App\User;

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


$factory->define(App\UserProfile::class, function (Faker $faker) {
    $users= User::pluck('id');
    return [
        'user_id' => $faker->randomElement($users),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber
    ];
});