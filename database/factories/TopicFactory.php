<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
    $sentence = $faker->sentence();
    $updated_at = $faker->dateTimeThisMonth();// 随机取一个月以内的时间
    $created_at = $faker->dateTimeThisMonth($updated_at);// 传参为生成最大时间不超过，因为创建时间需永远比更改时间要早

    return [
        'title' => $sentence,
        'body' => $faker->text(),
        'excerpt' => $sentence,
        'created_at' => $created_at,
        'updated_at' => $updated_at
    ];
});
