<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoriesLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('accessories_id')->unsigned();
            $table->string('lang',2)->nullable();
            $table->string('name')->nullable();
            $table->string('nr')->nullable();
            $table->text('body')->nullable();
            $table->integer('cena')->unsigned();

            $table->foreign('accessories_id')
                ->references('id')->on('accessories')
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
        Schema::dropIfExists('accessories_lang');
    }
}
