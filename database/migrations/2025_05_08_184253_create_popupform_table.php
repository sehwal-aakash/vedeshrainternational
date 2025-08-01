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
        Schema::create('popupform', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('emailaddress');
            $table->string('mobilenumber');
            $table->string('companybusiness')->nullable();
            $table->string('selectservices');
            $table->string('otherservices')->nullable();
            $table->string('ip_address');
            $table->string('pageurl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popupform');
    }
};
