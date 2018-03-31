<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Carousels\Carousel;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Carousel::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'link' => $faker->url,
        'src' => $faker->url,
    ];
});
