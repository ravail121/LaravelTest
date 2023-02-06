<?php

use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
   
    // $result = DB::table('users')
    // ->whereExists(function ($query) {
    //     $query->select('id')
    //           ->from('reservations')
    //           ->whereRaw('reservations.user_id = users.id')
    //           ->where('check_in', '=', '2023-01-23')
    //           ->limit(1);
    // })
    // ->get();
     $result = DB::table('comments')->paginate(3);

dump($result);



   
});
