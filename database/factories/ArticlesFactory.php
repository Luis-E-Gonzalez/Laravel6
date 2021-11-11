<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/* mandar a llamar los modelo que necesito */
use App\Article;
use App\Category;
use App\Images;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'title'=> $faker->sentence,
        'img'=> $faker->imageUrl($width = 640, $height = 480),
        'subtitle'=> $faker->sentence,
        'body'=> $faker->paragraph(2),
        /* definos nuestra llaves foraneas */
        'category_id'=> Category::all()->random()->id,
        'img_id'=> Images::all()->random()->id
    ];
});
