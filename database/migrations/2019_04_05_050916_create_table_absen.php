<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbsen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('log_absen', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->integer('user_id');
        //     $table->date('date');
        //     $table->time('time_in');
        //     $table->time('time_out')->nullable();
        //     $table->string('status');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_absen');
    }
}
