<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;
use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
      'name' => $faker -> word,
      'model' => $faker -> unique -> ean13,
      'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 1, $max = 1000),
      'consumption' => rand(10 ,200)
    ];
});
