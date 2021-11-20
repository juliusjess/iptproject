<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'make' => $faker->word(),
        'model' => $faker->word(),
        'year' => $faker->randomDigit(),
        'plate_no' => $faker->word()
    ];
});
