<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_problems', function (Blueprint $table) {
          $table->unsignedInteger('problem_id');
          $table->unsignedInteger('team_id');
          $table->timestamps();
        });

        Schema::table('buy_problems', function ($table) {
          $table->foreign('problem_id')->references('id')->on('problems')->onDelete('cascade');
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
        Schema::dropIfExists('buy_problems');
    }
}
