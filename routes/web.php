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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//USER DETAILS
Route::get('/user-details', 'UserDetailController@index');
Route::get('/user-details/create', 'UserDetailController@create');
Route::post('/user-details/submit', 'UserDetailController@submit');
Route::get('/user-details/edit', 'UserDetailController@edit');
Route::post('/user-details/update', 'UserDetailController@update');
Route::get('user-details/delete', 'UserDetailController@delete');

//DRIVER
Route::get('/drivers', 'DriverController@index');
Route::get('/drivers/create', 'DriverController@create');
Route::post('/drivers/submit', 'DriverController@submit');
Route::get('/drivers/edit', 'DriverController@edit');
Route::post('/drivers/update', 'DriverController@update');
Route::get('drivers/delete', 'DriverController@delete');

//VEHICLE
Route::get('/vehicles', 'VehicleController@index');
Route::get('/vehicles/create', 'VehicleController@create');
Route::post('/vehicles/submit', 'VehicleController@submit');
Route::get('/vehicles/edit', 'VehicleController@edit');
Route::post('/vehicles/update', 'VehicleController@update');
Route::get('vehicles/delete', 'VehicleController@delete');

//VENDORS
Route::get('/vendors', 'VendorController@index');
Route::get('/vendors/create', 'VendorController@create');
Route::post('/vendors/submit', 'VendorController@submit');
Route::get('/vendors/edit', 'VendorController@edit');
Route::post('/vendors/update', 'VendorController@update');
Route::get('/vendors/delete', 'VendorController@delete');

// SENSOR
Route::get('/sensor/update_seen', 'SensorController@update_seen')->name('noti.update');