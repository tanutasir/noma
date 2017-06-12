<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cars_id')->unsigned();
            $table->string('dienas',2)->nullable();
            $table->string('cena')->nullable();

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
        Schema::dropIfExists('tbl');
    }
}
