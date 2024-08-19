<?php

namespace App\Http\Controllers;

use App\Models\PostDetail;
use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        // Lấy dữ liệu từ bảng posts_detail dựa trên post_id
        $postDetail = PostDetail::where('post_id', $id)->firstOrFail();
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        // Trả về view với dữ liệu bài viết chi tiết
        return view('bai-viet.chi-tiet-bai-viet', [
            'postDetail' => $postDetail,
            'posts' => $posts
        ]);
    }
}
