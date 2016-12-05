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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\TimeTable::class, function(Faker\Generator $faker){
    // $station_ids = \App\Models\Station::lists('id')->all();
    $line_ids = \App\Models\Line::lists('id')->all();
    // shuffle($line_ids);
    return [
        'number' => str_random(5),
        'departure_time' => $faker->time('H:i'),
        // 'start' => array_pop($station_ids),
        // 'end' => array_pop($station_ids),
        'line_id' => $line_ids[array_rand($line_ids)],
    ];
});

// $factory->define(App\Models\line::class, function(Faker\Generator $faker){
//     $station_ids = \App\Models\Station::lists('id')->all();
//     shuffle($line_ids);
//     return [
//         'start' => array_pop($station_ids),
//         'end' => array_pop($station_ids),
//         'price' => $faker->randomNumber(3) / 10,
//     ];
// });
