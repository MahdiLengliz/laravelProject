<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Test;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(3),
        'description' =>$faker->text(100),
        'completed'=>false
    ];
});
