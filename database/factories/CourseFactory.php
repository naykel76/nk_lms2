<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        // 'title' => $faker->name,
        'title' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'body' => $faker->paragraph($nbSentences = 33, $variableNbSentences = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000)
    ];
});