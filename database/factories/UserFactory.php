<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Faker\Provider\Payment;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$gender = [0,1,2];

$factory->define(User::class, function (Faker $faker) use ($gender) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123123123'), // password
        'role' => 0,
        'birth' => $faker->dateTime($max = 'now', $timezone = null),
        'address' => $faker->address,
        'gender' => $gender[rand(0,2)],
        'phone' => $faker->phoneNumber,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
