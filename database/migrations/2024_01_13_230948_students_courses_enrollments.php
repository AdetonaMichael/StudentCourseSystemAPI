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
        Schema::create('students_courses_enrollments', function(Blueprint $table){
            $table->id();
            $table->foreignId('students_id')->constrained('students','id');
            $table->foreignId('courses_id')->constrained('students','id');
            $table->foreignId('enrolled_by_user_id')->constrained('users','id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("students_courses_enrollments");
    }
};
