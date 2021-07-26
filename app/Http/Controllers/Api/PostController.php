<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($url)
    {
        $post = Post::where('permanent_link', $url)->get()->first();
        $comments = $post->comments;
        return $post;
    }
    
    public function edit(Post $post)
    {
        return $post;
    }

    public function busqueda(Request $request)
    {
        $param = $request->get('entrada');
        if($param !== null){
            $result = Post::where('title', 'like', '%'.$param.'%')
                            ->orWhere('permanent_link', 'like', '%'.$param.'%')
                            ->paginate(15);
            $result->appends(request()->query())->links();
        } else{
            $result = Post::orderBy('id', 'desc')->paginate(25);
        }
        return $result;
    }
    
    public function showCategory($id)
    {
        $category = Category::find($id);
        $post = $category->posts;
        return $post;
    }
}
