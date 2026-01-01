<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;


class WebsiteController extends Controller
{

    public function index()
    {
        return view('website.index');
    }

    public function services()
    {
        return view('website.services');
    }
    public function blog()
    {
        $categories = Category::pluck('name');
        $latestPosts = Post::where('is_publish', true)->latest()->take(5)->get(); //Get latest 5 posts from DB
        $posts = Post::where('is_publish', true)->orderBy('created_at', 'desc')->paginate(2); //Get only published posts from posts table
        return view('website.blog.index', ['posts' => $posts, 'latestPosts' => $latestPosts,  'categories' => $categories]);
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function show(Post $post)
    {
        return view('website.blog.single', ['post' => $post]);
    }
}
