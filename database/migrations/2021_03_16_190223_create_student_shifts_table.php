<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_shifts', function (Blueprint $table) {
                $table->id();
                $table->string('user_id'); //serves as school id
                $table->string('session_id');
                // $table->string('student_class_id');
                $table->string('studentShift')->unique();
                $table->string('status')->nullable();
    
                $table->timestamps();
    
                $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_shifts');
    }
}
