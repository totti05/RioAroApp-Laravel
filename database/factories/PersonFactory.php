<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'dni' => $faker->numerify('V########')->unique(),
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'urbanization' =>$faker->city,
        'street' => $faker->randomDigit() ,
        'house_numer' => bothify('#?'),
        'birthdate' => date($format = 'Y-m-d', $max = 'now') // '1979-06-09'
    ];
});
