<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Users;
use App\Messages;
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

$factory->define(Users::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'telephone' => $faker->phoneNumber,
    ];
});

/**
 * Factory definition for model App\Messages.
 */
$factory->define(Messages::class, function (Faker $faker) {
    $user = factory('App\Users')->create();

    return [
        'user_id' => $user['id'],
        'description' => $faker->text,
    ];
});
