<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function index(): string
    {
    $data =
    
    [
        [
            "id"=>1,
        "title"=>"post title 1",
        "description"=>"psts description,"
        ],

        [
            "id"=>2,
        "title"=>"post title 2",
        "description"=>"psts description,"
        ],

        [
            "id"=>3,
        "title"=>"post title 3",
        "description"=>"psts description,"
        ],
    
    ];
       return view('posts/index',["posts"=>$data]);
    }
}
