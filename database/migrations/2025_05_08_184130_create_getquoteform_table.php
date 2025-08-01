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
        Schema::create('getquoteform', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('emailaddress');
            $table->string('mobilenumber');
            $table->string('companybusiness')->nullable();
            $table->string('website')->nullable();
            $table->string('selectservices');
            $table->string('otherservices')->nullable();
            $table->string('selectregion');
            $table->text('message');
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
        Schema::dropIfExists('getquoteform');
    }
};
