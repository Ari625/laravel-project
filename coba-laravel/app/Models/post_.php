<?php

namespace App\Models;

class post
{
  private static $blog_posts = [
    [
        "title" => "Judul Posts Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ari Rifandi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eaque dolorem, minima illum doloremque, ipsa beatae enim est explicabo eius doloribus nemo sint. Aliquid molestiae ab minima in autem, atque exercitationem error! Esse animi nesciunt inventore distinctio voluptatum! Eveniet, dignissimos corrupti, officiis tempore, animi rerum perspiciatis dolorem laudantium officia incidunt eaque voluptates eum accusantium aut expedita quibusdam dolore saepe ipsam blanditiis est accusamus eius architecto asperiores minima. Esse ea cupiditate provident deserunt nihil pariatur est sequi! Enim aliquam numquam eius?"
    ],
    [
        "title" => "Judul Posts Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Adrian",
        "body" => "
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequatur praesentium expedita possimus harum repudiandae doloribus, ducimus, incidunt ut impedit blanditiis? Nisi dignissimos sapiente amet architecto iste iure assumenda fugiat aut. Fugiat soluta excepturi hic voluptas similique repellendus numquam, delectus quo, quasi ipsa dolores et. Est quas facilis sint expedita? Laborum aspernatur laboriosam fugiat delectus facere nemo exercitationem eligendi repudiandae sequi illo ut deleniti possimus reiciendis, ipsam unde sunt cupiditate atque accusantium? Eius nemo a minima autem. Similique aliquam veniam dolores totam rem nam magni nisi inventore quia aut quaerat sed, quis ipsam odit exercitationem distinctio culpa necessitatibus eum ut!"
    ],
];

public static function all()
{
        return collect(self::$blog_posts);
}

public static function find($slug)
{
        $posts = static::all();

//     $post = [];
// foreach($posts as $p){
//     if($p["slug"] === $slug){
//         $post = $p;
//     }
// }
        return $posts -> firstwhere('slug', $slug);
}
}
