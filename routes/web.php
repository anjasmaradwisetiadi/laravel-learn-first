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
    return view('Home',[
        "title"=>"Home",
        "path"=>"Home",
    ]);
});

Route::get('/About', function () {
    return view('About',[
        "title"=>"About",
        "path"=>"About",
    ]);
});


Route::get('/Profile', function () {
    $collectBlog=[
        [
            "title"=> "judul pertama di Blog",
            "slug"=> "judul-pertama",
            "author"=> "john plate",
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ],
        [
            "title"=> "judul kedua di Blog",
            "slug"=> "judul-kedua",
            "author"=> "Francis Stewart",
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                            Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        "
        ]
    ];

    return view('Profile',[
        "path"=>"Profile",
        "title"=>"Profile",
        "name"=>"Anjasmara Dwi Setiadi",
        "pekerjaan"=>"Progammer",
        "age"=>20,
        "hobby"=>"olahraga",
        "blogs"=>$collectBlog
    ]);
});

//route post

Route::get('/Profile/{slug}', function ($slug) {
    $collectBlog=[
        [
            "title"=> "judul pertama di Blog",
            "slug"=> "judul-pertama",
            "author"=> "john plate",
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ],
        [
            "title"=> "judul kedua di Blog",
            "slug"=> "judul-kedua",
            "author"=> "Francis Stewart",
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                            Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        "
        ]
    ];

    $blogComplete=[];

    foreach ($collectBlog as $blog){
        if($blog['slug'] === $slug){
            $blogComplete=$blog;
        }
    }

    return view('Post',[
        "title" => "slug_params",
        "path" => "Posts",
        "post" => $blogComplete
    ]);
});

