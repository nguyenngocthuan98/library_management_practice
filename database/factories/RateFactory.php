<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rate;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        'rate' => rand(0,5),
        'like' => rand(0,2),
        'comment' => $faker->text($maxNbChars = 2000),
        'id_user' => rand(1,50),
        'id_book' => rand(1,50),
    ];
});
