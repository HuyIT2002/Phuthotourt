<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ParentModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{

    // public function index(Request $request)
    // {
    //     // Dữ liệu chung
    //     $posts_cu = Post::orderBy('created_at', 'asc')->take(4)->get();
    //     $posts_roll = Post::all();
    //     $parents = ParentModel::whereIn('parent_id', [1, 2, 3, 4, 5, 9])
    //         ->orderBy('created_at', 'asc')
    //     ->get();
    //     $posts_all = Post::with(['roleCategory', 'positionCategory', 'locationCategory'])
    //     ->orderBy('created_at', 'desc')
    //         ->get();

    //     $posts_reseach = Post::all();

    //     // Kiểm tra ajax và xử lý tương ứng
    //     if ($request->ajax()) {
    //         if ($request->has('query')) {
    //             $query = $request->input('query');
    //             if (!empty($query)) {
    //                 $searchResults = Post::where('content', 'LIKE', "%$query%")->get();
    //                 $view = view('partials.recent-search-list-1', ['posts_reseach' => $searchResults])->render();
    //                 return $view;
    //             } else {
    //                 return '<p>Không có kết quả tìm kiếm</p>';
    //             }
    //         } elseif ($request->has('parent_id') && !is_null($request->parent_id)) {
    //             $jobsQuery = Post::with(['roleCategory', 'positionCategory', 'locationCategory']);
    //             $jobsQuery->where(function ($query) use ($request) {
    //                 $query->whereHas('roleCategory', function ($query) use ($request) {
    //                     $query->where('parent_id', $request->parent_id);
    //                 })
    //                     ->orWhereHas('positionCategory', function ($query) use ($request) {
    //                         $query->where('parent_id', $request->parent_id);
    //                     })
    //                     ->orWhereHas('locationCategory', function ($query) use ($request) {
    //                         $query->where('parent_id', $request->parent_id);
    //                     });
    //             });
    //             $jobs = $jobsQuery->get();
    //             return view('bai-viet.bai-viet', compact('posts_cu', 'posts_roll', 'parents', 'posts_all', 'jobs', 'posts_reseach'))->render();
    //         }
    //     }


    //     // Trả về view mặc định nếu không phải request Ajax
    //     return view('bai-viet.bai-viet', compact('posts_cu', 'posts_roll', 'parents', 'posts_all', 'posts_reseach'));
    // }

    public function index(Request $request)
    {
        // Dữ liệu chung
        $posts_cu = Post::orderBy('created_at', 'asc')->take(4)->get();
        $posts_roll = Post::all();
        $parents = ParentModel::whereIn('parent_id', [1, 2, 3, 4, 5, 9])
            ->orderBy('created_at', 'asc')
        ->get();
        $posts_all = Post::with(['roleCategory', 'positionCategory', 'locationCategory'])
        ->orderBy('created_at', 'desc')
            ->get();

        $posts_reseach = Post::all();
        $search_time = Post::with(['roleCategory', 'positionCategory', 'locationCategory']);
        $jobs = collect();
        // Kiểm tra ajax và xử lý tương ứng
        if ($request->ajax()) {
            if ($request->has('query')) {
                $query = $request->input('query');
                if (!empty($query)) {
                    $searchResults = Post::where('content', 'LIKE', "%$query%")->get();
                    $view = view('partials.recent-search-list-1', ['posts_reseach' => $searchResults])->render();
                    return $view;
                } else {
                    return '<p>Không có kết quả tìm kiếm</p>';
                }
            } elseif ($request->has('parent_id') && !is_null($request->parent_id)) {
                $jobsQuery = Post::with(['roleCategory', 'positionCategory', 'locationCategory']);
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
                $jobs = $jobsQuery->get();
                return view('bai-viet.bai-viet', compact('posts_cu', 'posts_roll', 'parents', 'posts_all', 'jobs', 'search_time', 'posts_reseach'))->render();
            }

            if ($request->has('start_date') && $request->has('end_date')) {
                $startDate = $request->input('start_date');
                $endDate = $request->input('end_date');

                if (!empty($startDate) && !empty($endDate)) {
                    try {
                        // Định dạng ngày dự kiến là 'Y-m-d'
                        $startDate = Carbon::createFromFormat('Y-m-d', $startDate, 'UTC')->format('Y-m-d');
                        $endDate = Carbon::createFromFormat('Y-m-d', $endDate, 'UTC')->format('Y-m-d');

                        $posts_all = Post::with(['roleCategory', 'positionCategory',
                            'locationCategory'
                        ])
                        ->whereDate('created_at', '>=', $startDate)
                        ->whereDate('created_at', '<=', $endDate)
                        ->get();

                        $view = view('partials.list', ['posts_all' => $posts_all])->render();
                        return response()->json(['view' => $view]);
                    } catch (\Exception $e) {
                        // Đảm bảo hiển thị thông báo lỗi đầy đủ
                        return response()->json([
                            'error' => 'Có lỗi xảy ra trong việc xử lý ngày tháng. Ngày bắt đầu: ' . $startDate . ' Ngày kết thúc: ' . $endDate . '. Lỗi chi tiết: ' . $e->getMessage()
                        ]);
                    }
                } else {
                    return response()->json(['error' => 'Ngày bắt đầu hoặc ngày kết thúc không được để trống.']);
                }
            } else {
                return response()->json(['error' => 'Vui lòng cung cấp cả ngày bắt đầu và ngày kết thúc.']);
            }
        }


        // Trả về view mặc định nếu không phải request Ajax
        return view('bai-viet.bai-viet', compact('posts_cu', 'posts_roll', 'parents', 'search_time', 'jobs',  'posts_all', 'posts_reseach'));
    }


    
}