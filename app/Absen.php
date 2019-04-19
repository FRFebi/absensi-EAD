<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Absen extends Model
{
    protected $table    = "absens";
    protected $fillable = ['user_id', 'date','time_in', 'time_out', 'status'];
    protected $guarded	= ['absen_expired_time'];

    public function jadwals(){
    	return $this->belongsToMany('App\Jadwal');
    }

    public function users(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
