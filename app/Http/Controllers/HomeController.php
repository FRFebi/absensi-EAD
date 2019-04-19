<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use App\User;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function timezone($location)
    {   
        return date_default_timezone_set($location);
    }
    public function index()
    {
        $this->timezone('Asia/Jakarta');
        
        $user_id        = Auth::user()->id;
        $date           = date("Y-m-d");
        $check_absen    = Absen::where(['user_id'=> $user_id,'date' => $date])
        ->get()
        ->first();
        $time    = \Carbon\Carbon::now()->format("H:i:s");
        $expired = \Carbon\Carbon::now()->addHours(3)->format("Y-m-d H:i:s");

        // dd($expired);

        //Fungsi Disable Tombol Absen
        if(is_null($check_absen)) {
            $toggle = array(
                'btnIn'     => 'disabled',
                'btnOut'    => 'disabled'
            );
        } else if ($check_absen->time_in == NULL) {
            $toggle = array(
                'btnIn'     => '',
                'btnOut'    => 'disabled'
            );
        } else if ($check_absen->time_out == NULL && $time > $check_absen->absen_expired_time){
            $toggle = array(
                'btnIn'     => 'disabled',
                'btnOut'    => ''
            );
        } else {
            $toggle = array(
                'btnIn'     => 'disabled',
                'btnOut'    => 'disabled'
            );
        }

        //Menampilkan data secara desc dan maks 10 data per page
        $log_absen  = Absen::where('user_id', $user_id)
        ->orderBy('date', 'desc')
        ->paginate(10);

        return view('home', compact('log_absen', 'toggle'));
    }


    public function absen(Request $request)
    {

        //Deklarasi Nilai
        $this->timezone('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $date    = date("Y-m-d"); //date-month-year
        $time    = \Carbon\Carbon::now()->format("H:i:s");  //hour:minute:second
        $expired = \Carbon\Carbon::now()->addHours(3)->format("Y-m-d H:i:s");
        
        $status  = "Lagi Jaga";
        
        // dump($expired);
        
        //Inisialisasi Model
        $absen = new Absen;

        //Jika Btn Absen Masuk Di Pencet
        if (isset($request->btnIn)) {
         $status  = "Lagi Jaga";
            
            //Mencegah Duplikasi Data
         $data = $absen -> where(['date' => $date, 'user_id' => $user_id, 'status' => $status  ])-> count();
         
         if ($data > 0) {
            return redirect()->back();
        }

        

            //input nilai ke database
        $absen -> where  (['date' => $date, "user_id" => $user_id])
        ->update([
            'time_in'               => $time,
            'absen_expired_time'    => $expired,
            'status'                => 'Lagi Jaga'
        ]);

        return redirect()->back();
    } 

        //Jika Btn Keluar Di Pencet
    else if (isset($request->btnOut)) {
            //update data ke database
        $absen -> where  (['date' => $date, "user_id" => $user_id])
        -> update ([
            'time_out' => $time,
            'status'   => 'Selesai Piket'
        ]);
        return redirect()->back();
    }

    return $request->all();
}

public function welcome(){
    \Carbon\Carbon::setLocale('id');

    $day_of_week = date('N');
    $day = \Carbon\Carbon::now()->format('l, d F Y');
    $date = date("Y-m-d");
    $user_id = User::where('jadwal_id', $day_of_week)->pluck('id')->toArray();
    $count_piket = User::where('jadwal_id', $day_of_week)->pluck('id')->count();
    $count_absen = Absen::where('date', $date)->count();
    $absen = new Absen;
    $i=0;

    // dd($user_id);


    if ($count_absen!=$count_piket) {
        while($count_absen!=$count_piket) {
            $absen ->create([
                'user_id'=> $user_id[$i],
                'date' => $date
            ]);
            $count_absen++;
            $i++;
        }
    }else{
        $log_absen = DB::table('users')
                     ->join('absens', 'absens.user_id','=','users.id')
                     ->select('users.kode_asisten','absens.time_in','absens.time_out','absens.status')
                     ->where('absens.date',$date)
                     ->get();
        // dd($absen);
        return view('welcome', compact('log_absen','day'));
    }


    $log_absen = DB::table('users')
                     ->join('absens', 'absens.user_id','=','users.id')
                     ->select('users.kode_asisten','absens.time_in','absens.time_out','absens.status')
                     ->where('absens.date',$date)
                     ->get();
    // dd($log_absen);
    return view('welcome', compact('log_absen','day'));
}
}
