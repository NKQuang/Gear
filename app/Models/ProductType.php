<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $fillable = ['name', 'description']; // Không cần lưu name và description ở bảng chính nếu sử dụng translation

    public function translations()
    {
        return $this->hasMany(ProductTypeTranslation::class, 'type_id');
    }

    public function translation($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        return $this->hasOne(ProductTypeTranslation::class, 'type_id')->where('locale', $locale);
    }

}
