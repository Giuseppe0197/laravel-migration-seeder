<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title_album' => $faker -> name(),
        'date_release' => $faker -> date(),
        'tracks' => $faker -> numberBetween(1, 30),
        'artist' => $faker -> name(),
        'genre' => $faker -> word(),
        'producer' => $faker -> name(),
        'description' => $faker -> text(400)
    ];
});
