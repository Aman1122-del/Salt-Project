<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Main Products Table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // e.g., Edible Salt
            $table->string('slug')->unique();   // URL ke liye (edible-salt)
            $table->text('short_description')->nullable(); // Main page description
            $table->text('long_description')->nullable();  // Single page "About"
            $table->string('image')->nullable(); // Main image path
            $table->timestamps();
        });

        // 2. Product Variants (Sub-products)
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('group_name')->nullable(); // e.g., "Crystal Salt Granules"
            $table->string('variant_name');           // e.g., "Light Pink"
            $table->string('spec_key')->nullable();   // e.g., "Size" or "Weight"
            $table->string('spec_value')->nullable(); // e.g., "2-5 mm"
            $table->string('image')->nullable();      // Variant ki image
            $table->timestamps();
        });

        // 3. Product Benefits (Bullet points)
        Schema::create('product_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('benefit');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_benefits');
        Schema::dropIfExists('product_variants');
        Schema::dropIfExists('products');
    }
};