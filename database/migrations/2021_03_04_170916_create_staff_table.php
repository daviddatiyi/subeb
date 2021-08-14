<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('session_id');
            $table->string('section_id');
            $table->string('surName');
            $table->string('firstName');
            $table->string('otherName');
            $table->string('dob');
            $table->string('sex');
            $table->string('eMail')->unique();
            $table->string('phoneNumber')->Unique();
            $table->string('firstAppointment');
            $table->string('confirmation')->nullable();
            $table->string('entryQualification');
            $table->string('highestQualification');
            $table->string('lastAppointment');
            $table->string('State');
            $table->string('lga');
            $table->string('homeTown');
            $table->string('gradeLevel');
            $table->string('step');
            $table->string('psn');
            $table->string('passport');
            $table->string('source');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
