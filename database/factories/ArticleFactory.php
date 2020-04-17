<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText($maxNbChars = 15),
        'slug'=>$faker->slug(),
        'body'=>$faker->realText($maxNbChars = 200),
    ];
});
