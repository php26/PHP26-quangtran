<?php

use Faker\Generator as Faker;
use App\Product;
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

$factory->define(App\Comment::class, function (Faker $faker) {
	$users= User::pluck('id');
	$products= Product::pluck('id');
    return [
        'content' => $faker->text(100),
        'product_id' => $faker->randomElement($products),
        'user_id' => $faker->randomElement($users),
    ];
});