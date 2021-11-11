<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //definimos que datos se van a ingresar a nuestra BD y que tipo 
        //faker es una libreria que viene por defecto en laravel que nos ayuda a ingresar los tipos de datos
        'name' => $this->faker->word
    ];
});
