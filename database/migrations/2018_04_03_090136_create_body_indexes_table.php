<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodyIndexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_indexes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('co')->unsigned();
            $table->integer('vai')->unsigned();
            $table->integer('nguc')->unsigned();
            $table->integer('eo')->unsigned();
            $table->integer('bung')->unsigned();
            $table->integer('mong')->unsigned();
            $table->integer('dui')->unsigned();
            $table->integer('dung')->unsigned();
            $table->integer('dai_than')->unsigned();
            $table->integer('dai_tay')->unsigned();
            $table->integer('bap_tay')->unsigned();
            $table->integer('ha_eo')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('body_indexes');
    }
}
