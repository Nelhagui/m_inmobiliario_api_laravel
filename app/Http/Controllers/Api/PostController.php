<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function show($url)
    {
        $post = Post::where('permanent_link', $url)->get()->first();
        $comments = $post->comments;
        return $post;
    }
    
    public function showCategory($id)
    {
        $category = Category::find($id);
        $post = $category->posts;
        return $post;
    }
}
