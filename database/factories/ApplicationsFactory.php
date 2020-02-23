<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'name' => $faker->text(20),
        'user_id' => $faker->numberBetween(1,2),
        'category_id' => $faker->numberBetween(1,6),
        'description' => $faker-> text(10),
        'image_url' => $faker->imageUrl($width = 512, $height = 512),
        'price' => $faker->randomFloat(2,1,1000)
    ];
});
