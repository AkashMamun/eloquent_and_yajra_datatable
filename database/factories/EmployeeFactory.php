<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'salary' => $faker->numberBetween(20000,30000),
        'department' => $faker->randomElement($array = array('Accounting','Marketing','Sales','Quality'))
    ];

});
