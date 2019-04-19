<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('jadwal_id')->unsigned();
            $table->date('date')->nullable();
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->enum('status', ['Belum Piket', 'Lagi Jaga', 'Selesai Piket'])->default("Belum Piket");
            $table->timestamps();

        });

        // Schema::table('absens', function(Blueprint $table) {
        //     $table->foreign('jadwal_id')->references('id')->on('jadwals');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absens');
    }
}
