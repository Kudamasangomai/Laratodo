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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->enum('status', ['open', 'completed'])->default('open');
            $table->enum('category', ['work', 'school','personal',])->default('personal');
            $table->date('StartDate');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // onwer of the Todo
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
