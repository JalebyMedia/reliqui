<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('schedule_id');
            $table->unsignedInteger('group_id');
            $table->string('token')->unique();
            $table->date('date');
            $table->time('preferred_time');
            $table->string('patient_condition');
            $table->string('status'); // scheduled, checkin, expired.
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
        Schema::dropIfExists('appointments');
    }
}
