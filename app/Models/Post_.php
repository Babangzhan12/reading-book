<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fauzan Ahmad Zaman",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et id nam dolorum harum accusantium voluptate sequi, aliquam cum maiores laudantium dignissimos animi, sunt odio. Temporibus corrupti sequi distinctio natus placeat enim quos ut laudantium praesentium ex, obcaecati dolore error impedit saepe, molestiae inventore reiciendis minus. Rerum eum enim deserunt voluptate fuga, porro iusto blanditiis voluptatem et voluptas! Natus repellendus aut id dolore commodi atque itaque blanditiis dignissimos, nemo odio fugiat, maiores rerum. Accusamus pariatur aliquid placeat exercitationem eos? Corporis, suscipit."
        ],
        [
            "title" => "Judul Post Sandhika",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore amet provident quisquam et! Veritatis facilis quae et nostrum quo natus voluptates quia, sunt cum nulla eligendi voluptatum maiores, doloribus ducimus consequuntur quas tenetur magnam enim dolorum? Hic autem illo qui repudiandae sint molestiae et expedita rem excepturi accusamus? Nostrum quae beatae odit dolor maiores excepturi quia qui laborum maxime culpa laudantium quo veritatis in modi eligendi deserunt commodi officia cupiditate, sequi nisi ipsa, exercitationem, nemo suscipit! Distinctio nesciunt natus vero molestiae commodi expedita ratione ut ipsa reiciendis, temporibus quaerat voluptatum culpa tempore! Tenetur numquam vitae repellat autem praesentium quidem incidunt.
            "
        ]
    ];

    public static function all()
    {

        foreach (self::$blog_posts as &$post) {
            $post['excerpt'] = substr($post['body'], 0, 150) . '...';
        }
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // self::$blog_posts;
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
