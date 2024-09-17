<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypeTranslation extends Model
{
    use HasFactory;

    protected $table = 'type_translations';
    protected $fillable = ['type_id', 'locale', 'name', 'description'];
}
