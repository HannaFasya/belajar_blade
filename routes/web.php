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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "name" => "Hanna Fasya",
        "email" => "hanna.firdausiah20@gmail.com",
        "image" =>"hanna.jpg"

    ]);
});


Route::get('/posts',function(){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=> "judul-post-pertama",
            "author" => "Hanna",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit numquam explicabo perspiciatis nisi obcaecati, expedita cum, possimus optio corrupti facere, quis doloremque repellat vel maxime dignissimos pariatur illo beatae ratione. Necessitatibus perferendis veniam deserunt ab porro soluta similique, molestias ad dolorum dignissimos eius quidem optio nam ex hic dolores accusantium blanditiis qui in amet illum quasi ratione inventore ullam. Laboriosam fuga voluptatibus delectus ut repellat eum dolorem praesentium expedita vitae voluptatum aut fugit suscipit numquam dolores, at impedit nulla corrupti commodi! Amet harum cumque et dolorem ab asperiores sunt veritatis dolorum ea? Impedit nemo at necessitatibus aperiam maxime voluptatum aut."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author" => "Fasya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit numquam explicabo perspiciatis nisi obcaecati, expedita cum, possimus optio corrupti facere, quis doloremque repellat vel maxime dignissimos pariatur illo beatae ratione. Necessitatibus perferendis veniam deserunt ab porro soluta similique, molestias ad dolorum dignissimos eius quidem optio nam ex hic dolores accusantium blanditiis qui in amet illum quasi ratione inventore ullam. Laboriosam fuga voluptatibus delectus ut repellat eum dolorem praesentium expedita vitae voluptatum aut fugit suscipit numquam dolores, at impedit nulla corrupti commodi! Amet harum cumque et dolorem ab asperiores sunt veritatis dolorum ea? Impedit nemo at necessitatibus aperiam maxime voluptatum aut."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
//halaman single post
Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=> "judul-post-pertama",
            "author" => "Hanna",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit numquam explicabo perspiciatis nisi obcaecati, expedita cum, possimus optio corrupti facere, quis doloremque repellat vel maxime dignissimos pariatur illo beatae ratione. Necessitatibus perferendis veniam deserunt ab porro soluta similique, molestias ad dolorum dignissimos eius quidem optio nam ex hic dolores accusantium blanditiis qui in amet illum quasi ratione inventore ullam. Laboriosam fuga voluptatibus delectus ut repellat eum dolorem praesentium expedita vitae voluptatum aut fugit suscipit numquam dolores, at impedit nulla corrupti commodi! Amet harum cumque et dolorem ab asperiores sunt veritatis dolorum ea? Impedit nemo at necessitatibus aperiam maxime voluptatum aut."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author" => "Fasya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit numquam explicabo perspiciatis nisi obcaecati, expedita cum, possimus optio corrupti facere, quis doloremque repellat vel maxime dignissimos pariatur illo beatae ratione. Necessitatibus perferendis veniam deserunt ab porro soluta similique, molestias ad dolorum dignissimos eius quidem optio nam ex hic dolores accusantium blanditiis qui in amet illum quasi ratione inventore ullam. Laboriosam fuga voluptatibus delectus ut repellat eum dolorem praesentium expedita vitae voluptatum aut fugit suscipit numquam dolores, at impedit nulla corrupti commodi! Amet harum cumque et dolorem ab asperiores sunt veritatis dolorum ea? Impedit nemo at necessitatibus aperiam maxime voluptatum aut."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});









