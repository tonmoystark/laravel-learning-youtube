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
        //
        Schema::dropIfExists('messages');
        Schema::dropIfExists('students');
        Schema::dropIfExists('demo');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('message', 255);
            $table->timestamps();
        });
        Schema::create('demo', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            $table->timestamps();
        });
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('age');
            $table->timestamps();
            $table->enum('gender', ['m', 'f'])->default('m');
            $table->date('date_of_birth');
        });
    }
};
