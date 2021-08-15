<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_returns', function (Blueprint $table) {
            $table->id();
            
            // $table->string('school_Id');
            $table->string('user_id');
            $table->string('year');
            $table->string('month');
            $table->string('school');
            $table->string('name');
            $table->string('sex');
            $table->string('dob');
            $table->string('firstAppointment');
            $table->string('highestQualification');
            $table->string('dateOfLastAppointment');
            $table->string('rank');
            $table->string('classTaught');
            $table->string('lga');
            $table->string('state');
            $table->string('gl');
            $table->string('yrsInPresentStation');
            $table->string('yrsInService');
            $table->string('psn')->unique();
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
        Schema::dropIfExists('monthly_returns');
    }
}
