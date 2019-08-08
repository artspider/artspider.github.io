<?php

use Faker\Generator as Faker;
use App\Post;
use App\Comment;

$factory->define(Comment::class, function(Faker $faker){
    return [
        'post_id' => factory(Post::class)->create()->id,
        'reply' => $faker->text
    ];
});
