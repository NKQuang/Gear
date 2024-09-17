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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('type_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->string('locale')->index(); // Ngôn ngữ: vi, en, ...
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();

            // Khóa ngoại tham chiếu đến bảng types
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->unique(['type_id', 'locale']); // Đảm bảo mỗi loại sản phẩm có 1 bản dịch cho mỗi ngôn ngữ
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
