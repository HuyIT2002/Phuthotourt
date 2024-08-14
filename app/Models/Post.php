<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Tên bảng tương ứng với model (nếu tên bảng không theo quy tắc của Laravel)
    protected $table = 'posts';

    // Khóa chính của bảng
    protected $primaryKey = 'post_id';

    // Các cột có thể điền dữ liệu
    protected $fillable = [
        'role',
        'status',
        'content',
        'description',
        'view',
        'image_url',
        'role_parent_id',
        'position_parent_id',
        'location_parent_id',
    ];

    // Định nghĩa các mối quan hệ với bảng categories
    public function roleCategory()
    {
        return $this->belongsTo(ParentModel::class, 'role_parent_id', 'parent_id');
    }

    public function positionCategory()
    {
        return $this->belongsTo(ParentModel::class, 'position_parent_id', 'parent_id');
    }

    public function locationCategory()
    {
        return $this->belongsTo(ParentModel::class, 'location_parent_id', 'parent_id');
    }
}