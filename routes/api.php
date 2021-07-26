<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\Commentary;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//WEB
Route::get('/posts', function(){ return Post::orderBy('id', 'desc')->paginate(20); });
Route::get('/posts/busqueda', [PostController::class, 'busqueda']);
Route::get('/post/edit/{post}', [PostController::class, 'edit']);
Route::get('/posts/category/{id}', [PostController::class, 'showCategory']);
Route::get('/categories', function(){ return Category::all(); });


// Route::get('/mycomments/{user_id}', [CommentaryController::class, 'showMyComments']);
