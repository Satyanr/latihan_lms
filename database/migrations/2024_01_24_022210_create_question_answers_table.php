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
        Schema::create('question_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('questions_id')->nullable()->constrained('questions')->onDelete('cascade');
            $table->foreignId('users_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('quizzes_id')->nullable()->constrained('quizzes')->onDelete('cascade');
            $table->string('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_answers');
    }
};
