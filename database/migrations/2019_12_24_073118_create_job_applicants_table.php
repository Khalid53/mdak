<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applicants', function (Blueprint $table) {
            $table->bigIncrements('jaid');
            $table->string('full_name');
            $table->string('m_name');
            $table->string('email');
            $table->string('phone');
            $table->longText('present_address');
            $table->date('dob');
            $table->string('blood');
            $table->tinyInteger('gender_info');
            $table->tinyInteger('marital_status');
            $table->string('nid_card');
            $table->string('passport_number');
            $table->text('cv');
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
        Schema::dropIfExists('job_applicants');
    }
}
