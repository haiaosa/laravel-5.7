<?php

use Faker\Generator as Faker;

$factory->define(App\Story::class, function (Faker $faker) {
    return [
     	'title' => 'story ' . $faker->title,
        'content' => $faker->text,
        'user_id' => function () {
            return App\User::first()->id;
        },
        'catalog_id' => function () {
            return App\Catalog::first()->id;
        },
    ];
});
