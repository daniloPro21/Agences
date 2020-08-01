<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Properties;
use Illuminate\Support\Str;
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

$factory->define(App\Properties::class, function (Faker $faker) {

    return [
        'title' => $faker->name,
        'surface' => $faker->buildingNumber,
        'place' => $faker->address,
        'city' => $faker->city,
        'chambre' => $faker->randomDigit,
        'garage' => $faker->randomDigit,
        'price' => $faker->buildingNumber,
        'douche' => $faker->randomDigit,
        'image' => 'http://gasimmo.mg/wp-content/uploads/sites/1/nggallery/gasimmo/csm_Gelly_a4d567350f.jpg'

    ];
});
