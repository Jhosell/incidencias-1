<?php

use Faker\Generator as Faker;

$factory->define(App\Cargo::class, function (Faker $faker) {
    return [
        'cargo' => $faker->word,
    ];
});
