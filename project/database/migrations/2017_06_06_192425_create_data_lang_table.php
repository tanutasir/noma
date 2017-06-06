<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('data_id')->unsigned();
            $table->string('lang')->nullable();
            $table->string('meta')->nullable();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
            $table->string('h1')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();

            $table->foreign('data_id')
                ->references('id')->on('data')
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
        Schema::dropIfExists('data_lang');
    }
}
