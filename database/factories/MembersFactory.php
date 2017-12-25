<?php

use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'avatar' => $faker->image(),
        'info' => $faker->text(200),
        'status' => $faker->randomElement(['В игре', 'Выбыл']),
        'direction_id' => mt_rand(1, 5)
    ];
});