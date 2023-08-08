<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    public function index()
    {
       
        return view('dashboard.posts.index',[
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function show (Post $post)       
    {
        return $post;
    }
    public function create()
    {
        return view('dashboard.posts.create');
    }
}
