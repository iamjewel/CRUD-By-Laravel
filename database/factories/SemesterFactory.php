<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Semester;
use Faker\Generator as Faker;

$factory->define(Semester::class, function (Faker $faker) {
    return [
        'semester_name' =>$faker->name
    ];
});
