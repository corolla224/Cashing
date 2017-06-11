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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cash::class, function (Faker\Generator $faker) {

    return [
        'method' => $faker->title,
        'fromBank' => $faker->name,
        'fromAccountNumber'=> $faker->sentence,
        'fromAccountName' => $faker->name,
        'transferDate' => $faker->date,
        'transferTime' => $faker->time,
        'toBank' => $faker->name,
        'toAccountNumber' => $faker->sentence,
        'toAccountName' => $faker->name,
        'amount' => $faker->sentence,
        'transferStatus' => $faker->sentence,
        
    ];
});
			