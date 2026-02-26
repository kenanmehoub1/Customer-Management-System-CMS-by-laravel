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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('file_input')->nullable();
            $table->string('client_name');
            $table->enum('country_code',['966','971','965','973','974','968','20','962'])->nullable();
            $table->string('phone_number')->nullable();
            $table->string('password');
            $table->string('email')->unique()->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('country',['sa','ae','kw','bh','qa','om','eg','jo'])->nullable();
            $table->enum('work_type',['Python','JavaScript','Java','c++','php'])->nullable();
            $table->string('state')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->foreignId('added_by')->constrained('users')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};