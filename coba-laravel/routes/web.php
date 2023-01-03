<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ari Rifandi",
        "email" => "ari06@gmail.com",
        "image" => "212210214.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequatur praesentium expedita possimus harum repudiandae doloribus, ducimus, incidunt ut impedit blanditiis? Nisi dignissimos sapiente amet architecto iste iure assumenda fugiat aut. Fugiat soluta excepturi hic voluptas similique repellendus numquam, delectus quo, quasi ipsa dolores et. Est quas facilis sint expedita? Laborum aspernatur laboriosam fugiat delectus facere nemo exercitationem eligendi repudiandae sequi illo ut deleniti possimus reiciendis, ipsam unde sunt cupiditate atque accusantium? Eius nemo a minima autem. Similique aliquam veniam dolores totam rem nam magni nisi inventore quia aut quaerat sed, quis ipsam odit exercitationem distinctio culpa necessitatibus eum ut!"
        ],
    ];

    $new_post = [];
foreach($blog_posts as $post){
    if($post["slug"] === $slug){
        $new_post = $post;
    }
}

    return view('post', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});