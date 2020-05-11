<?php

use App\Models\Borrow;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Borrow::class, function (Faker $faker){
    return [
        'date_pay' => date("Y-m-d"),
        'accept' => rand(0,1),
        'id_user' => rand(1,30),
        'id_book' => rand(1,50),
    ];
});
