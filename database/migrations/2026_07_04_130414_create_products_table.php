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
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->longText('description')->nullable();
            $table->string('short_description')->nullable();
            $table->decimal('price',12,2)->default(0);
            $table->decimal('sale_price',12,2)->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->boolean('status')->default(true);
            $table->foreignId('category_id')->nullable()->constrained()->nullOrDelete();
            $table->foreignId('subcategory_id')->nullable()->constrained('sub_categories')->nullOrDelete();
            $table->string('brand')->nullable();
            $table->decimal('weight', 10, 2)->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
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
