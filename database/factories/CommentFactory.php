<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
     	'title' => $faker->title,
        'story_id' => function () {
            return factory(App\Story::class)->create()->id;
        }
    ];
});
