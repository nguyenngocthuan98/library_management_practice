<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Like;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'like' => rand(0,2),
        'id_user' => rand(1,30),
        'id_book' => rand(1,50),
    ];
});
