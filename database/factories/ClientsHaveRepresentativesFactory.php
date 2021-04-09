<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientsHaveRepresentatives;
use Faker\Generator as Faker;

$factory->define(ClientsHaveRepresentatives::class, function (Faker $faker) {
    return [
        'representative_id' => rand(1, 5),
        'client_id' => rand(1 , 5),
        'client_company_id' => rand(1 ,3)
    ];
});
