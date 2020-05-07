<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'comment' => $faker->text($maxNbChars = 20),
        'id_user' => rand(1,30),
        'id_book' => rand(1,50),
    ];
});
