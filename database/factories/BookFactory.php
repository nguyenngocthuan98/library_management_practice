<?php

use App\Models\Book;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$status = [0,1,2];

$factory->define(Book::class, function (Faker $faker) use ($status) {
    return [
        'name_book' => $faker->name,
        'status' => $status[rand(0,2)],
        'page_number' => rand(0,1000),
        'image' => 'image/9.jpg',
        'description' => $faker->text($maxNbChars = 200),
        'id_category' => rand(1,20),
        'id_publisher' => rand(1,20),
        'id_author' => rand(1,20),
    ];
});
