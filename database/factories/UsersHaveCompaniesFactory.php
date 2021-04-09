<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UsersHaveCompanies;
use Faker\Generator as Faker;

$factory->define(UsersHaveCompanies::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 3),
        'company_id' => rand(1, 3)
    ];
});
