<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'total_amount',
        // Các cột khác mà bạn muốn cho phép gán giá trị hàng loạt
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
