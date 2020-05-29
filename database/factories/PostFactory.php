<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Faker\Provider\ne_NP\Address;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'title' =>$faker->word,
        'text'=>$faker->paragraph
    ];
});
