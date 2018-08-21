<?php

use Faker\Generator as Faker;
use App\Order;
use App\Product;

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


$factory->define(App\OrderItem::class, function (Faker $faker) {
	$orders= Order::pluck('id');
	$products=Product::pluck('id');
    return [
    	'order_id' => $faker->randomElement($orders),
    	'product_id' => $faker->randomElement($products),
        'quantity' => rand(1,10),
    ];
});