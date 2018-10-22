<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPostsController extends Controller
{
    public function approve(Request $request)
    {
    	$post = Post::find($request->id);
    	$post->update(['approved' => true]);
    	dd($post);
    }
}
