<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'images';

    // Khóa chính của bảng
    protected $primaryKey = 'images_id';

    // Cho phép Laravel tự động quản lý các trường `created_at` và `updated_at`
    public $timestamps = true;

    // Các thuộc tính có thể được gán hàng loạt (mass assignable)
    protected $fillable = [
        'image_url',
        'content',
    ];
}