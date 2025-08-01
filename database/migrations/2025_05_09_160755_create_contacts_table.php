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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('designation')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();

            $table->string('source')->nullable(); // e.g. Website, Chatbot, etc.
            $table->string('contact_type')->default('lead'); // lead, customer, partner, etc.
            $table->string('status')->default('new'); // new, in_progress, converted, etc.
            $table->string('priority')->default('medium'); // low, medium, high, urgent

            $table->text('message')->nullable();
            $table->unsignedBigInteger('assigned_to')->nullable(); // user_id of admin/staff
            $table->string('tags')->nullable(); // comma-separated tags
            $table->text('notes')->nullable(); // internal admin notes

            $table->string('ip_address')->nullable();
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();

            $table->timestamp('last_contacted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
