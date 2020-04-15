<?php

use App\Models\Publisher;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'name_publisher' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
    ];
});
