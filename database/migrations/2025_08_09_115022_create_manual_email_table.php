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
        Schema::create('manual_email', function (Blueprint $table) {
            $table->id();
            $table->string('recipient_name');
            $table->string('recipient_email');
            $table->string('subject');
            $table->enum('content_type', ['template', 'message']);
            $table->unsignedBigInteger('template_id')->nullable();
            $table->foreign('template_id')
                ->references('id')
                ->on('email_templates')
                ->onDelete('set null');
            $table->text('template_variables')->nullable();
            $table->longText('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manual_email');
    }
};
