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

$factory->define(App\Post::class, function (Faker $faker) {
	$title = $faker->sentence;
	$slug = str_slug($title, '-');
    return [
        'title' => $title,
        'body' => $faker->paragraph,
        'slug' => $slug,
        'approved' => $faker->boolean($chanceOfGettingTrue = 50),
        'user_id' => function () {
        	return factory('App\User')->create()->id;
        },
    ];
});
