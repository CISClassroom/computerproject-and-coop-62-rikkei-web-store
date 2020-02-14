<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->Name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'gender' => $faker->randomElement($array = array ('male', 'female')),
        'date_of_birth' => $faker->date,
        'role_id' => '3',
        'newsletter' => 1,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
// PHP Error:  Class name must be a valid object or a string in D:/Works/Laravel/nike-webstore/database/factories/UserFactory.php on line 28
