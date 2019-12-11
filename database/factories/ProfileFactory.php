<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'display_name' => $faker->name,
        'gender' =>$faker->randomElements(['Male', 'Female'])[0],
        'user_id' => $faker->unique()->numberBetween(1,10),
        'bio' => $faker->realText()
    ];
});
