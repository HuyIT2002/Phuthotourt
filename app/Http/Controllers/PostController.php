<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ParentModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Lấy các bài viết mới nhất (giả sử bạn muốn lấy 3 bài viết mới nhất)
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        $posts_roll = Post::all();
        // Trả về view với dữ liệu posts
        $parents = ParentModel::whereIn('parent_id', [1, 2, 3, 4, 5, 9])
            ->orderBy('created_at', 'asc')
            ->get();
        $posts_all = Post::orderBy('created_at', 'desc')->get();

        return view('bai-viet.bai-viet', compact('posts', 'posts_roll', 'parents', 'posts_all'));
    }
}