<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Post\StorePostRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mews\Purifier\Facades\Purifier;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['gallery', 'category'])->get();
        // return $posts;
        return view('auth.posts.index', ['posts' => $posts]);
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
    public function store(StorePostRequest $request)
    {
        // 1️⃣ Get validated data
        $data = $request->validated();

        //Clean description field from harmful code if any exists
        $data['description'] = Purifier::clean($data['description']);
        // Image Validation

        try {

            DB::beginTransaction();

            // 2️⃣ Handle image upload
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '-' . $file->getClientOriginalName();
                // dd($fileName);
                $file->move(public_path('uploads/posts'), $fileName);

                // 3️⃣ Attach image name to data
                $data['file'] = $fileName;

                // 4️⃣ Save image in galleries table
                $gallery = Gallery::create([
                    'image' => $fileName
                ]);

                $data['gallery_id'] = $request->hasFile('file') ? $gallery->id : null;
                // $data['gallery_id'] = $gallery->id;
            }
            $data['category_id'] = $request->category;

            // 5️⃣ Create post
            Post::create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $th->getMessage();
        }


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
