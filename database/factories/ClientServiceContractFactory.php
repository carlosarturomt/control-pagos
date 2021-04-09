<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientServiceContract;
use Faker\Generator as Faker;

$factory->define(ClientServiceContract::class, function (Faker $faker) {
    return [
        'client_id' => rand(1, 3),
        'client_company_id' => rand(1, 3),
        'service_id' => rand(1, 3),
        'date' => $faker->date()
    ];
});
