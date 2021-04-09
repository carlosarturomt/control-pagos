<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'amount' => rand(2000, 25000)/10,
        'date' => $faker->date(),
        'debt' => rand(2000, 25000)/10,
        'deadline' => $faker->date()
    ];
});
