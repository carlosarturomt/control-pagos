<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'company_id' => random_int(1,3),
        'customer_name' => $faker->company,
        'rfc' => strtoupper(Str::random(8)),
        'address' => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'cell_phone' => $faker->e164PhoneNumber,
        'mail' => $faker->unique()->safeEmail
    ];
});
