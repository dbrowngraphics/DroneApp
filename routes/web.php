<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
	return view('homepage');
});

Route::resource('/pilots', PilotController::class);

Route::resource('/drones', DroneController::class);

Route::get('/missions/addstaff', ['uses' => 'MissionController@addStaff'])->name('missions.addstaff');
Route::post('/missions/addstaffStore', ['uses' => 'MissionController@addStaffStore'])->name('missions.addstaffStore');

Route::resource('/missions', MissionController::class);


