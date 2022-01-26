<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'surname' => $faker -> lastName(),
        'stagename' => $faker -> name(),
        'country_birth' => $faker -> word(),
        'total_albums' => $faker -> numberBetween(1, 30),
        'genre' => $faker -> word(),
        'description_artist' => $faker -> text(500)
    ];
});
