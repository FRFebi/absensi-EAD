<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jadwal_id')->unsigned()->nullable();
            $table->integer('absen_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('jadwal_id')->references('id')->on('jadwals')->onUpdate('cascade');
            $table->foreign('absen_id')->references('id')->on('absens')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen_jadwal');
    }
}
