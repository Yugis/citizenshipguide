<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
    	$pendingPosts = Post::whereApproved(0)->with('user')->get();

    	return view('admin.index', compact('pendingPosts'));
    }
}
