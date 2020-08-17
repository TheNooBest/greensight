<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserModel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(UserModel::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'password_hash' => Str::random(32) . '_hash',
        'token' => Str::random(10),
    ];
});
