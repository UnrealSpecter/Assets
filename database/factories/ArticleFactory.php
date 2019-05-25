<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

use Faker\Provider\Lorem;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'summary' => $faker->text($maxNbChars = 100),
        'publish_date' => now(),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
