<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Images;
use Faker\Generator as Faker;

$factory->define(Images::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->imageUrl($width = 640, $height = 480, 'cats'),
    ];
});
