<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $arrs = ['Bài viết hay quá', 'Bổ ích quá','Tôi muốn share bài viết này','Oke hay lắm','Cảm ơn thông tin bổ ích nhé','Tôi sẽ không quay lại trang này nữa đâu','Donal Trump ís da best!!','Yolo','Xin chào mọi người'];
    $random_comment = $arrs[array_rand($arrs)];
    return [
        'content' => $random_comment,
        'post_id' => App\Post::all()->random()->id,
    ];
});
