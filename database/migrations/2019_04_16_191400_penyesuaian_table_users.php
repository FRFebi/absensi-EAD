<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            
            $table->enum('roles',['admin','user'])->after('name');
            $table->string('kode_asisten')->after('roles');
            $table->integer('jadwal_id')->unsigned()->nullable()->after('kode_asisten');
            $table->renameColumn('email','nim');

            $table->foreign('jadwal_id')->references('id')->on('jadwals')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('kode_asisten');
            $table->dropColumn('roles');
            $table->dropForeign('users_jadwal_id_foreign');
            $table->dropColumn('jadwal_id');
            $table->renameColumn('nim','email');

        });
    }
}
