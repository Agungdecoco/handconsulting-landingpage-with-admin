<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10)->withQueryString();
        return view('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('create-post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request['slug'] = Str::slug($request->title);
        $request['excerpt'] = Str::limit(strip_tags($request->body), 100);

        $validateData = $request->validate([
            'title' => 'required|max:50',
            'category_id' => 'required',
            'slug' => 'required|unique:posts',
            'excerpt' => 'required|max:255',
            'body' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('image');

        $nama_file = time() . "_" . $image->getClientOriginalName();

        $filePath = $image->storeAs('images', "{$nama_file}");
        $validateData['image'] = $filePath;
        $validateData['published_at'] = now();
        Post::create($validateData);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $categories = Category::all();
        $posts = Post::all()->where('id', $id);
        return view('post-edit', compact('posts', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request['slug'] = Str::slug($request->title);
        $request['excerpt'] = Str::limit(strip_tags($request->body), 100);

        $validateData = $request->validate([
            'title' => 'required|max:50',
            'slug' => 'required|unique:posts',
            'excerpt' => 'required|max:255',
            'body' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('image');

        $nama_file = time() . "_" . $image->getClientOriginalName();

        $filePath = $image->storeAs('images', "{$nama_file}");
        $validateData['image'] = $filePath;
        $validateData['published_at'] = now();
        Post::find($request->id)->update($validateData);

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('home');
    }
}
