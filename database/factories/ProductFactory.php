<?php

use Faker\Generator as Faker;
use App\Category;

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

$factory->define(App\Product::class, function (Faker $faker) {
	$categories=Category::pluck('id');
    return [
        'name' => $faker->name,
        'category_id' => $faker->randomElement($categories),
        'price' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10000)
    ];
});