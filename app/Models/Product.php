<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','sku', 'description', 'price', 'type_id','contact_for_price'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function translations()
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function getTranslation($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        return $this->translations()->where('locale', $locale)->first();
    }
}
