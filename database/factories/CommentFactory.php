<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
     	'title' => 'comment' . $faker->title,
        'story_id' => function () {
            return App\Story::first()->id;
        },
    ];
});
