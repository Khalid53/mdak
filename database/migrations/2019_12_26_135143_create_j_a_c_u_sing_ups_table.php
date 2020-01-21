<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJACUSingUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('j_a_c_u_sing_ups', function (Blueprint $table) {
            $table->bigIncrements('jacu_id');
            $table->string('jacu_user_name');
            $table->string('email_address')->unique();
            $table->string('password');
            $table->string('p_number');
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
        Schema::dropIfExists('j_a_c_u_sing_ups');
    }
}
