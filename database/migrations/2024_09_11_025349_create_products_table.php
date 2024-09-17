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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
            $table->boolean('contact_for_price')->default(false); // Cột mới
            // Foreign key constraint
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
        });
        // Migration for product_translations table
        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('locale')->index(); // Language code (vi, en)
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->unique(['product_id', 'locale']); // Ensure one translation per locale
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
