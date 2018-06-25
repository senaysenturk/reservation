<?php

use Faker\Generator as Faker;

$factory->define(App\Reservation::class, function (Faker $faker) {
    return [
        'adsoyad' => $faker-> sentence,
        'telefon' => $faker-> paragraph,
        'tarih' => $faker-> word
    ];
});
