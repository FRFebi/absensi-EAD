<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $table    = "jadwals";

    public function Users(){
    	return $this->hasMany('App\User');
    }

    public function Absens(){
    	return $this->belongsToMany('App\Absen');
    }
}
