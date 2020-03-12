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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'DoctorController@index')->name('index');

Route::get('/logout', 'Auth\LoginController@register')->name('register');
Route::get('password/reset/', 'ResetPasswordController@showResetForm')->name('password/reset');
Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password/email');

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/profile/{id}', 'DoctorController@profile')->name('profile');
    Route::post('/profile/update/{id}', 'DoctorController@updateDoctor')->name('updateDoctor');
    Route::get('/profile/delete/{id}', 'DoctorController@deleteDoctor')->name('deleteDoctor');
    
    Route::get('/schedule', 'ScheduleController@listSchedule')->name('listSchedule');
    Route::get('/schedule/add/', 'ScheduleController@addSchedule')->name('addSchedule');
    Route::post('/schedule/add/{id}', 'ScheduleController@saveSchedule')->name('saveSchedule');
    Route::get('/schedule/delete/{id}', 'ScheduleController@deleteSchedule')->name('deleteSchedule');

    Route::get('/scheduling', 'ScheduleController@scheduling')->name('scheduling');
    Route::get('/scheduling/add/{doctor_id}/{date}', 'ScheduleController@addScheduling')->name('addScheduling');
});