<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Provider;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'lastName'  => $faker->name,
        'company'   => $faker->company,
        'email'     => $faker->unique()->safeEmail,
        'phone1'    => $faker->phoneNumber,
        'phone2'    => $faker->phoneNumber,
        'state'     => '1',
    ];
});
