<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;


$factory->define(Person::class, function (Faker $faker) {
    return [
        'dni' => $faker->numerify('V########'),
        'name' => $faker->firstname,
        'lastname' => $faker->lastname,
        'urbanization' =>$faker->city,
        'street' => $faker->randomDigit() ,
        'house_number' => $faker->bothify('#?'),
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now') // '1979-06-09'
    ];
});
