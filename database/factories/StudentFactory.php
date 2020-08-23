<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
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

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'e_mail' => $faker->unique()->safeEmail,
        'gender' => 0,
        'date_of_birth'=> now(),
        'address' => $faker->name,
        'born_place' => Str::random(5),
        'phone_of_parents' => '0969121998',
        'name_of_dad'=> Str::random(10),
        'father_job'=>Str::random(10),
        'name_of_mom'=> Str::random(10),
        'mother_job'=> Str::random(10),
        'folk_id'=> 1,
        'veteran' => 0,
        'new'=>0,
        'status'=>0

    ];
});
