<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'message' => $faker->text(50),
        'recipe' => $faker->text(10),
        'uid' => $faker->text(7) 
    ];
});
