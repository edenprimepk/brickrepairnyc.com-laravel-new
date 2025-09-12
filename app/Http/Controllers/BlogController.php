<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')->orderBy('created_at', 'desc')->get();
        return view('blog', compact('blogs'));
    }
    public function show(Blog $blog, $slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        if (isset($blog)) {
            return view('Blogs.detail-blog', compact('blog'));
        } else {
            abort(404);
        }
    }
}
