<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('session_id')->nullable();
            $table->string('surName');
            $table->string('firstName');
            $table->string('otherName');
            $table->string('gender');
            $table->string('eMail')->unique();
            $table->string('DOB');
            $table->string('disability');
            $table->string('phoneNumber')->unique();
            $table->string('state');
            $table->string('lga');
            $table->string('homeTown');
            $table->string('passport');
            $table->string('studentClass_id')->nullable();
            $table->string('stream_id')->nullable();
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
        Schema::dropIfExists('students');
    }
}
