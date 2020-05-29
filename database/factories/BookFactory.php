<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title'=>$faker->catchPhrase,
        'author'=>$faker->name,
        'year'=>$faker->numberBetween($min = 1900, $max = 2020)
    ];
});
