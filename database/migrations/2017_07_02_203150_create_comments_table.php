<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id')->nullable();
            $table->integer('show_id')->nullable();
            $table->integer('user_id');
            $table->string('comment');
            $table->timestamps();
            $table->foreign('movie_id')->references('id')->on('movie')->onDelete('cascade');
            $table->foreign('show_id')->references('id')->on('show')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
