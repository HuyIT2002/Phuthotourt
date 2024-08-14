<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy 5 ảnh mới nhất dựa trên cột `created_at`
        $latestImages = Image::orderBy('created_at', 'desc')->limit(5)->get();
        $latestPosts = Post::latest()->take(3)->get();
        $contents = Content::orderBy('created_at', 'desc')->take(3)->get();
        // Trả về view với danh sách ảnh
        return view('home.home', compact('latestImages', 'latestPosts', 'contents'));
    }
}
