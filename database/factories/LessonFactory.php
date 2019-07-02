<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use Illuminate\Support\Str;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'course_id' => $faker->numberBetween($min = 1, $max = 5),
        'title' => $faker->name,
        'body' => $faker->paragraph($nbSentences = 33, $variableNbSentences = true),
    ];
});
