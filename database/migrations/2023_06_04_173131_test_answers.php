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
        Schema::create('test_answer', function(Blueprint $table){
            $table->increments('id');
            $table->foreignId('test_result_id');
            $table->foreignId('question_id');
            $table->foreignId('question_option_id');
            $table->tinyInteger('is_correct')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_answer');
    }
};
