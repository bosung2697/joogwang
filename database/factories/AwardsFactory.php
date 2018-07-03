<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Awards::class, function (Faker $faker) {
$date=$faker->dateTimeThisMonth;

    return [
        'title' => $faker->sentence(),
        'fileimage' => '/img/no_image.jpg',
        'awarded_date' => $faker->date(),
        'created_at' => $date,
        'updated_at' => $date,
    ];


});
