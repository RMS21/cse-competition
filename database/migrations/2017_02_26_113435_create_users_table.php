<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->engine = "InnoDB";
          $table->increments('id');
          $table->integer('team_id')->unsigned();
          $table->string('first_name');
          $table->string('last_name');
          $table->string('student_number');
          $table->string('phone_number');
          $table->string('email');
          $table->unsignedTinyInteger('entery_year');
          $table->string('univercity');
          $table->timestamps();
        });

        Schema::table('users', function ($table) {
          $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
