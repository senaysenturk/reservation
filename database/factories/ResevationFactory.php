<?php

use Faker\Generator as Faker;

$factory->define(App\Reservation::class, function (Faker $faker) {
    return [
        'summary' => $faker-> sentence,
        'description' => $faker-> paragraph,
        'status' => $faker-> word
    ];
});
