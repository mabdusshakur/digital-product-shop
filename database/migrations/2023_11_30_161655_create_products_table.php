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
            $table->string('name');
            $table->longText('descripton');
            $table->string('slug');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('stock');
            $table->float('regular_price');
            $table->float('sale_price');
            $table->boolean('status')->default(true);
            $table->boolean('flash_sale')->default(false);
            $table->integer('view_count')->default(0);
            $table->integer('sold_count')->default(0);
            $table->timestamps();
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