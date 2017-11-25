<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {
        if (file_exists(resource_path('views/posts/'.$slug.'.blade.php'))) {
            return view('posts.'.$slug);
        }
        return view('missing');
    }
}
