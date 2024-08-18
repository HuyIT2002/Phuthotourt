<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        // Lấy danh sách documents và sắp xếp theo thời gian mới nhất
        $document_reseach = Document::all();
        $documents = Document::orderBy('created_at', 'desc')->get();
        $documents8 = Document::orderBy('created_at', 'desc')->take(8)->get();
        if ($request->ajax()) {
            if ($request->has('query')) {
                $query = $request->input('query');
                if (!empty($query)) {
                    $searchResults = Document::where('document_name', 'LIKE', "%$query%")->get();
                    $view = view('partials.recent-search-list-2', ['document_reseach' => $searchResults])->render();
                    return $view;
                } else {
                    return '<p>Không có kết quả tìm kiếm</p>';
                }
            }
            if ($request->has('start_date') && $request->has('end_date')) {
                $startDate = $request->input('start_date');
                $endDate = $request->input('end_date');

                if (!empty($startDate) && !empty($endDate)) {
                    try {
                        // Định dạng ngày dự kiến là 'Y-m-d'
                        $startDate = Carbon::createFromFormat('Y-m-d', $startDate, 'UTC')->format('Y-m-d');
                        $endDate = Carbon::createFromFormat('Y-m-d', $endDate, 'UTC')->format('Y-m-d');

                        $documents = Document::whereDate('created_at', '>=', $startDate)
                            ->whereDate('created_at', '<=', $endDate)
                            ->get();

                        $view = view('partials.list-table', ['documents' => $documents])->render();
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
        // Truyền dữ liệu vào view
        return view('tai-lieu.tai-lieu', compact('documents', 'document_reseach', 'documents8'));
    }
}