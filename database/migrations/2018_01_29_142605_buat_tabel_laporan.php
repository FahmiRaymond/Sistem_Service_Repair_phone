<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berhasils', function(Blueprint $table){
            $table->increments('id');
            $table->integer('kode_hp');
            $table->string('pemilik');
            $table->string('no_hp');
            $table->string('merk');
            $table->string('model');
            $table->string('no_imei')->nullable();
            $table->string('kerusakan');
            $table->bigInteger('biaya')->unsigned();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('gagals', function(Blueprint $table){
            $table->increments('id');
            $table->integer('kode_hp');
            $table->string('pemilik');
            $table->string('no_hp');
            $table->string('merk');
            $table->string('model');
            $table->string('no_imei')->nullable();
            $table->string('kerusakan');
            $table->text('keterangan')->nullable();
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
        Schema::drop('berhasils');
        Schema::drop('gagals');
    }
}
