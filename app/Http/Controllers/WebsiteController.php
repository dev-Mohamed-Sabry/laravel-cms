<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {

        $categories = Category::all();
        $latestPosts = Post::where('is_publish', true)->latest()->take(5)->get(); //Get latest 5 posts from DB
        $posts = Post::where('is_publish', true)->orderBy('created_at', 'desc')->paginate(2); //Get only published posts from posts table
        return view('website.blog.index', ['posts' => $posts, 'latestPosts' => $latestPosts,  'categories' => $categories]);
    }

    public function show(Post $post)
    {
        return view('website.blog.single', ['post' => $post]);
    }
}