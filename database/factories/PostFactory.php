<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $arrs = ['Nội dung bài viết 1','Nội dung bài viết 2', 'Nội dung bài viết 3'];
    $random_content = $arrs[array_rand($arrs)];
    return [
        'content' => $random_content,
        'user_id' => App\User::all()->random()->id,
    ];
});
