<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'price' => $faker->numberBetween(500, 10000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(0,30)
    ];
});
