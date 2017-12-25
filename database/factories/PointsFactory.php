<?php

use Faker\Generator as Faker;

$factory->define(App\Point::class, function (Faker $faker) {
    return [
        'points' => mt_rand(1, 5),
        'members_id' => mt_rand(1, 10),
        'created_at' => $faker->date('Y-m-d H:i:s'),
    ];
});