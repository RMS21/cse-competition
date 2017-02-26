<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_requests', function (Blueprint $table) {
          $table->engine = "InnoDB";
          $table->unsignedInteger('team_id');
          $table->unsignedInteger('problem_id');
          $table->unsignedTinyInteger('state');
          $table->timestamps();
        });

        Schema::table('review_requests', function ($table) {
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
        Schema::dropIfExists('review_requests');
    }
}
