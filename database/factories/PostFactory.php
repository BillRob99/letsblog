<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //Generates a random piece of text to represent the content of a post.
        'text' => $faker->realText(),
        //Generates a number between 1 and 10 to 
        //represents the ID of the profile that created the post.
        'profile_id' => $faker->numberBetween(1,10)
    ];
});
