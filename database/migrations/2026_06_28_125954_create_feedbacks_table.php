<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')
                  ->constrained('users')
                  ->cascadedOnDelete();

            $table->foreignId('course_id')
                  ->constrained()
                  ->cascadedOnDelete(); 
                  
            $table->tinyInteger('rating');
                  
            $table->text('comment')->nullable();

            $table->timestamps();

            $table->unique(['student_id','course_id']);
                 
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
};
