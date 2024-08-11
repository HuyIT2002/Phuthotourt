<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ParentModel;
use App\Models\JobModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        // Chỉ lấy các parent có parent_id là 6, 7, và 8
        $parents = ParentModel::whereIn('parent_id', [6, 7, 8])->get();

        // Tạo một mảng chứa các categories tương ứng với mỗi parent
        $parentCategories = [];

        foreach ($parents as $parent) {
            $parentCategories[$parent->parent_id] = Categories::where('parent_id', $parent->parent_id)->get();
        }
        $jobs = JobModel::with([
            'roleCategory', 'positionCategory', 'locationCategory'
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
        // Truyền dữ liệu sang view
        return view('tuyen-dung.tuyen-dung', compact('parents', 'parentCategories', 'jobs'));
    }
}
