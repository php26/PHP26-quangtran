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

$factory->define(App\Image::class, function (Faker $faker) {
	$users= User::pluck('id');
	// dd($users);
	$products= Product::pluck('id');
    return [
        'imageable_id' => $faker->randomElement($users),
        'imageable_type' => 'App\User',
        'path' => 'images/abc.jpg',
        // ['imageable_id' => $faker->randomElement($products),
        // 'imageable_type' => 'App\Product',
        // 'path' => 'images/abc.jpg',
        // ],
    ];
});