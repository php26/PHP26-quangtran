<?php

use Faker\Generator as Faker;
use App\User;
use App\Role;

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


$factory->define(App\RoleUser::class, function (Faker $faker) {
    
    $roles= Role::pluck('id');
    $users= User::pluck('id');

    return [
        'user_id' => $faker->randomElement($users),
        'role_id' => $faker->randomElement($roles),
    ];
});