<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ParentModel;
use App\Models\JobModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax() && $request->has('query')) {
            $query = $request->input('query');

            if (!empty($query)) {
                $searchResults = JobModel::join('categories', 'jobs.role_category_id', '=', 'categories.category_id')
                    ->where('categories.category_name', 'LIKE', "%$query%")
                    ->select('jobs.*')
                    ->distinct()
                    ->with('roleCategory')
                    ->get();

                // Render view cho dữ liệu tìm kiếm
                $view = view('partials.recent-search-list', ['jobs' => $searchResults])->render();
                return $view;
            } else {
                return '<p>Không có kết quả tìm kiếm</p>';
            }
        }
        // Chỉ lấy các parent có parent_id là 6, 7, và 8
        $parents = ParentModel::whereIn('parent_id', [6, 7, 8])->get();

        // Tạo một mảng chứa các categories tương ứng với mỗi parent
        $parentCategories = [];

        foreach ($parents as $parent) {
            $parentCategories[$parent->parent_id] = Categories::where('parent_id', $parent->parent_id)->get();
        }
        $jobs = JobModel::with([
            'roleCategory',
            'positionCategory',
            'locationCategory'
        ])
            ->get();


        $jobsQuery = JobModel::with(['roleCategory', 'positionCategory', 'locationCategory']);

        if ($request->has('category_id') && !is_null($request->category_id)) {
            $jobsQuery->where(function ($query) use ($request) {
                $query->whereHas('roleCategory', function ($query) use ($request) {
                    $query->where('category_id', $request->category_id);
                })
                    ->orWhereHas('positionCategory', function ($query) use ($request) {
                        $query->where('category_id', $request->category_id);
                    })
                    ->orWhereHas('locationCategory', function ($query) use ($request) {
                        $query->where('category_id', $request->category_id);
                    });
            });
        }
        $jobs = $jobsQuery->get();
        if ($request->ajax()) {
            return view('tuyen-dung.tuyen-dung', compact('parents', 'parentCategories', 'jobs'))->render();
        }

        $jobs = JobModel::with(['roleCategory', 'positionCategory', 'locationCategory'])->get();


        return view('tuyen-dung.tuyen-dung', compact('parents', 'parentCategories', 'jobs'));
    }
}
