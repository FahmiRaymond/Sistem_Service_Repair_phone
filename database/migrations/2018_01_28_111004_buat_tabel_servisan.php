<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelServisan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servisans', function(Blueprint $table){
            $table->increments('id');
            $table->integer('kode_hp');
            $table->string('pemilik');
            $table->string('no_hp');
            $table->integer('merk_id')->unsigned();
            $table->string('model');
            $table->string('no_imei')->nullable();
            $table->string('kerusakan');
            $table->bigInteger('biaya')->unsigned()->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('merk_id')->references('id')->on('merks')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servisans');
    }
}
