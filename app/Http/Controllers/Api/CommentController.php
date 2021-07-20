<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function showMyComments($user_id)
    {
        return Commentary::where('user_id', $user_id)->get();
    }
}
