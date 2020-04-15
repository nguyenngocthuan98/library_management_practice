<?php

use App\Models\Author;
use Faker\Generator as Faker;


$factory->define(Author::class, function (Faker $faker) {
    return [
        'name_author' => $faker->name,
    ];
});
