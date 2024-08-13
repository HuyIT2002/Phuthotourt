<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\JobModel;
use App\Models\JobDetailsModel;
use App\Models\Cv;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function show($job_id)
    {
        $jobs = JobModel::where('jobs.job_id', $job_id)->get();
        $jobDetail = JobDetailsModel::where('job_id', $job_id)->first();

        // Hoặc phương thức khác để lấy dữ liệu
        $jobsQuery = JobModel::with(['roleCategory', 'positionCategory', 'locationCategory']);
        if ($jobs) {
            return view('tuyen-dung.chi-tiet-tuyen-dung', compact('jobs', 'jobDetail'));
        } else {
            return redirect()->route('tuyen-dung')->with('error', 'Job not found');
        }
    }
    // public function upload(Request $request)
    // {
    //     // Xác thực dữ liệu
    //     $filePath = null;
    //     if ($request->hasFile('file_path')) {
    //         $file = $request->file('file_path'); // Lấy đối tượng tệp tin từ yêu cầu
    //         $fileName = time() . '-' . $file->getClientOriginalName(); // Tạo tên tệp tin mới với dấu thời gian để đảm bảo tính duy nhất
    //         $filePath = 'cv_files/' . $fileName; // Đặt đường dẫn lưu tệp tin
    //         $file->move(public_path('cv_files'), $fileName); // Di chuyển tệp tin vào thư mục public/cv_files
    //     }


    //     // Lưu thông tin vào cơ sở dữ liệu
    //     Cv::create([
    //         'ho_ten' => $request->input('ho_ten'),
    //         'age' => $request->input('age'),
    //         'current_residence' => $request->input('current_residence'),
    //         'email' => $request->input('email'),
    //         'level' => $request->input('level'),
    //         'willing_to_travel' => $request->input('willing_to_travel'),
    //         'sex' => $request->input('sex'),
    //         'place_of_birth' => $request->input('place_of_birth'),
    //         'phone' => $request->input('phone'),
    //         'url_facebook' => $request->input('url_facebook'),
    //         'file_path' => $filePath,
    //         'willing_to_work_overtime' => $request->input('willing_to_work_overtime'),
    //         'previous_experiences' => $request->input('previous_experiences'),
    //         'personal_experience' => $request->input('personal_experience'),
    //     ]);

    //     return redirect()->route('chi-tiet-tuyen-dung')->with('success', 'CV đã được gửi thành công!');
    // }
    public function upload(Request $request)
    {
        // Lấy id từ URL hoặc request
        $id = $request->route('id');

        $filePath = null;

        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('cv_files'), $fileName);
            $filePath = $fileName;
        }

        Cv::create([
            'ho_ten' => $request->input('ho_ten'),
            'age' => $request->input('age'),
            'current_residence' => $request->input('current_residence'),
            'email' => $request->input('email'),
            'level' => $request->input('level'),
            'willing_to_travel' => $request->input('willing_to_travel'),
            'sex' => $request->input('sex'),
            'place_of_birth' => $request->input('place_of_birth'),
            'phone' => $request->input('phone'),
            'url_facebook' => $request->input('url_facebook'),
            'file_path' => $filePath,
            'willing_to_work_overtime' => $request->input('willing_to_work_overtime'),
            'previous_experiences' => $request->input('previous_experiences'),
            'personal_experience' => $request->input('personal_experience'),
        ]);

        // Chuyển hướng về trang chi tiết tuyển dụng với id cụ thể
        return redirect()->route('tuyen-dung', ['id' => $id])->with('success', 'CV đã được gửi thành công!');
    }
}