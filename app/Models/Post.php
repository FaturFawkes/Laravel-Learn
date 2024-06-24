<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public static function allPost() {
        return [
            [
                'id' => 1,
                'slug' => "judul-article-1",
                'title' => 'Judul Article 1',
                'author'=> 'Nur Fatchurohman',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut assumenda cum voluptatibus facere inventore id
                tempora odio illum molestias commodi provident minus eaque, ex reprehenderit, minima sed tenetur vitae
                deserunt.'
            ],
            [
                'id' => 2,
                'slug' => "judul-article-2",
                'title' => 'Judul Article 2',
                'author'=> 'Nur Fatchurohman',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, porro provident
                magnam fugiat, ea non asperiores, autem fugit quia accusamus alias nostrum adipisci. Placeat libero at ullam
                nobis quia molestias.'
            ],
        ];
    }

    public static function find($slug): array {
        // return Arr::first(static::allPost(), function($post) use($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::allPost(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
