<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {

// 	\Carbon\Carbon::setLocale('id');

// 	$day_of_week = date('N');
// 	$day = \Carbon\Carbon::now()->format('l, d F Y');
// 	$date = date("Y-m-d");
// 	$user_id = App\User::where('jadwal_id', $day_of_week)->pluck('id')->toArray();
// 	$count_piket = App\User::where('jadwal_id', $day_of_week)->pluck('id')->count();
// 	$count_absen = App\Absen::where('date', $date)->count();
// 	$absen = new App\Absen;
// 	$i=0;

// 	// dd($user_id);


// 	if ($count_absen!=$count_piket) {
// 		while($count_absen!=$count_piket) {
// 			$absen ->create([
// 				'user_id'=> $user_id[$i],
// 				'date' => $date
// 			]);
// 			$count_absen++;
// 			$i++;
// 		}
// 	}else{
// 		$log_absen = DB::table('users')
// 					 ->join('absens', 'absens.user_id','=','users.id')
// 					 ->select('users.kode_asisten','absens.time_in','absens.time_out','absens.status')
// 					 ->where('absens.date',$date)
// 					 ->get();
// 		// dd($absen);
// 		return view('welcome', compact('log_absen','day'));
// 	}


// 	$log_absen = DB::table('users')
// 					 ->join('absens', 'absens.user_id','=','users.id')
// 					 ->select('users.kode_asisten','absens.time_in','absens.time_out','absens.status')
// 					 ->where('absens.date',$date)
// 					 ->get();
// 	// dd($log_absen);
// 	return view('welcome', compact('log_absen','day'));
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome');
Route::post('/absen','HomeController@absen');