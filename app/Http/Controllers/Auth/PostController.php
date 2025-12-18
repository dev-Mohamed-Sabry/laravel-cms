<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('auth.posts.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('auth.posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        #Data Validation
        $data =   $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:50', 'unique:posts,title'],
            'description' => ['required', 'string', 'min:8'],
            'category' => ['required'],
            'status' => ['required', 'in:0,1'],
            'file' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048', 'dimensions:max_width=1080,max_height=1080']
            // 'user_id' => ['required', 'exists:users,id'],
        ]);

        Post::create($data);
        // dd($data);
        return redirect()->route('posts.index')->with('success', "Post Created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}