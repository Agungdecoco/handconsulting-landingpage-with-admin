<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->take(3)->get();
        return view('landingpage.index', compact('posts'));
    }

    public function services()
    {
        return view('landingpage.services');
    }

    public function article($id = null)
    {
        $categories = Category::all();
        $get_posts = Post::latest();

        if (request('search'))
            $get_posts->where('title', 'like', '%' . request('search') . '%');

        if ($id)
            $get_posts->where('category_id', $id);

        $category = Category::find($id);

        $posts = $get_posts->paginate(5)->withQueryString();
        return view('landingpage.article', compact('posts', 'categories', 'category'));
    }

    public function post($slug)
    {
        $posts = Post::where('slug', $slug)->get();
        return view('landingpage.post', compact('posts'));
    }

    // public function category($slug)
    // {
    //     $categories = Category::all();
    //     $get_posts = Post::latest();

    //     if (request('search'))
    //         $get_posts->where('title', 'like', '%' . request('search') . '%');

    //     if (request('category'))
    //         $get_posts->where('category_id', request('category'));

    //     $posts = $get_posts->get();
    //     return view('landingpage.article', compact('posts', 'categories'));
    // }

    public function about()
    {
        return view('landingpage.about');
    }
}
