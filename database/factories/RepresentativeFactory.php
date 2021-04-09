<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Representative;
use Faker\Generator as Faker;

$factory->define(Representative::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'phone_number' => $faker->phoneNumber,
        'cell_phone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'mail' => $faker->unique()->safeEmail
    ];
});
