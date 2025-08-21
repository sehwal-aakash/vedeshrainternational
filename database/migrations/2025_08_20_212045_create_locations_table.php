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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            
            // Page Type: service / industry / technology
            $table->enum('page_type', ['service', 'industry', 'technology']);
            
            // Selected Page ID (service, industry, or technology)
            $table->unsignedBigInteger('page_id');
            
            // Blade Template file name
            $table->string('template_name');
            
            // SEO fields
            $table->string('page_slug')->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            
            // Page status
            $table->enum('status', ['active', 'inactive'])->default('active');
            
            $table->timestamps();

            // Optional: foreign keys (if you want relational integrity)
            $table->foreign('page_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('industries')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('technologies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
