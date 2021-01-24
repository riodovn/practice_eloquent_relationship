<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    $provinces = ['Đà Nẵng', 'Quảng Nam', 'Hà Nội', 'Vũng Tàu', 'Khánh Hoà','Lào Cai'];
    $random_province = $provinces[array_rand($provinces)];
    return [
        'address' => $faker->address,
        'tel' => $faker->phoneNumber,
        'user_id' => App\User::all()->random()->id,
        'province' => $random_province,
    ];
});
