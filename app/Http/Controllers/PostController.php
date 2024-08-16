<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ParentModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $posts_cu = Post::orderBy('created_at', 'asc')->take(4)->get();
        
        $posts_roll = Post::all();
        // Trả về view với dữ liệu posts
        $parents = ParentModel::whereIn('parent_id', [1, 2, 3, 4, 5, 9])
            ->orderBy('created_at', 'asc')
            ->get();

        $posts_all = Post::with(['roleCategory', 'positionCategory', 'locationCategory'])
        ->orderBy('created_at', 'desc')
        ->get();


        $jobsQuery = Post::with(['roleCategory', 'positionCategory', 'locationCategory']);

        if ($request->has('parent_id') && !is_null($request->parent_id)) {
            $jobsQuery->where(function ($query) use ($request) {
                $query->whereHas('roleCategory', function ($query) use ($request) {
                    $query->where('parent_id', $request->parent_id);
                })
                    ->orWhereHas('positionCategory', function ($query) use ($request) {
                        $query->where('parent_id', $request->parent_id);
                    })
                    ->orWhereHas('locationCategory', function ($query) use ($request) {
                        $query->where('parent_id', $request->parent_id);
                    });
            });
        }

        $jobs = $jobsQuery->get();
        if ($request->ajax()) {
            return view('bai-viet.bai-viet', compact(
                'posts_cu',
                'posts_roll',
                'parents',
                'posts_all'
            ))->render();
        }


        $posts = $jobsQuery->get();

        if ($request->ajax() && $request->has('query')) {
            $query = $request->input('query');

            if (!empty($query)) {
                // Tìm kiếm dựa trên content và post_id
                $searchResults = Post::where('content', 'LIKE', "%$query%")
                ->orWhere('content', 'LIKE', "%$query%")
                ->get();

                // Truyền biến $posts vào view (thay vì $jobs)
                return view('partials.recent-search-list-1', ['posts' => $searchResults])->render();
            } else {
                return '<p>Không có kết quả tìm kiếm</p>';
            }
        }


        return view('bai-viet.bai-viet', compact('posts_cu', 'posts_roll', 'parents', 'posts_all', 'posts'));
    }
}