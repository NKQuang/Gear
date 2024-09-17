<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title_en', 'content_en', 'title_vi', 'content_vi', 'image', 'is_published'];
    // Phương thức truy vấn để lấy dữ liệu theo ngôn ngữ
    public function getTitleAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->title_vi : $this->title_en;
    }

    public function getContentAttribute()
    {
        return app()->getLocale() === 'vi' ? $this->content_vi : $this->content_en;
    }
}
