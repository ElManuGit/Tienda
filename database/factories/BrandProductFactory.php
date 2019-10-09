<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BrandProduct;
use Faker\Generator as Faker;

$factory->define(BrandProduct::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
    ];
});
