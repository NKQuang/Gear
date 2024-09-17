<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // Liên kết với bảng orders
            $table->unsignedBigInteger('product_id'); // Sửa lỗi, không dùng `after` ở đây
            $table->string('product_name'); // Tên sản phẩm
            $table->integer('quantity'); // Số lượng sản phẩm
            $table->decimal('price', 10, 2); // Giá sản phẩm tại thời điểm đặt hàng
            $table->decimal('subtotal', 10, 2); // Tổng tiền cho sản phẩm này (quantity * price)
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
