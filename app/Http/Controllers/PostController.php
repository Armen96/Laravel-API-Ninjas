<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
    {

    }

    public function getPosts()
    {
        $posts = new PostCollection(Post::all());
        return response()->json([
            'posts' => $posts
        ]);
    }
}
