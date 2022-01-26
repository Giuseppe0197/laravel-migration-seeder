<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(), 
        'artist' => $faker -> name(), 
        'date_of_release' => $faker -> date(), 
        'genre' => $faker -> word(), 
        'length' => $faker -> numberBetween(30, 700), 
        'album' => $faker -> word(), 
        'price' => $faker -> numberBetween(500, 10000), 
        'text' => $faker -> text(300), 
        'vote' => $faker -> numberBetween(0, 10) 
    ];
});
