<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cars_id')->unsigned();
            $table->string('lang',2)->nullable();
            $table->string('meta')->nullable();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
            $table->string('h1')->nullable();
            $table->string('h2')->nullable();
            $table->text('body')->nullable();

            $table->foreign('cars_id')
                ->references('id')->on('cars')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_lang');
    }
}
