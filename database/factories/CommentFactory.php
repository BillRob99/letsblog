<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //Generates a random piece of text to represent the content of the comment.
        'text' => $faker->realText(),
        //Generates a number between 1 and 10 to represent the 
        //id of the profile that created the comment.
        'profile_id' => $faker->numberBetween(1,10),
        //Generates a number between 1 and 10 to represent the
        //id of the post that the comment was created for.
        'post_id' => $faker->numberBetween(1,10)
    ];
});
