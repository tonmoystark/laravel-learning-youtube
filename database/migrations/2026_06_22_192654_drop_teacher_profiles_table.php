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
        Schema::dropIfExists('teacher_profiles');
        Schema::dropIfExists('learners');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
