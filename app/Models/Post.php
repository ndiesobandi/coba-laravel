<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [

            [
                "judul"     => "Content Pertama",
                "slug"      => "content-pertama",
                "author"    => "Ndie Muhammad",
                "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam earum temporibus ut quam, nihil placeat aliquam at qui assumenda quaerat corporis, dignissimos excepturi repudiandae. Sapiente blanditiis magni accusantium cum aut."
            ],
            [
                "judul"     => "Content Kedua",
                "slug"      => "content-kedua",
                "author"    => "Ndie Muhammad",
                "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam earum temporibus ut quam, nihil placeat aliquam at qui assumenda quaerat corporis, dignissimos excepturi repudiandae. Sapiente blanditiis magni accusantium cum aut."
            ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }

}
