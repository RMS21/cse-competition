<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->mediumText('description')->nullable();
          $table->string('image_path')->nullable();
          $table->char('level', 1);
          $table->unsignedTinyInteger('stage');
          $table->tinyInteger('score');
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
        Schema::dropIfExists('problems');
    }
}
