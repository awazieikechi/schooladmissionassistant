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



Auth::routes(['verify' => true]);


Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'HomeController@index');
Route::get('/logout', 'HomeController@destroy');
Route::get('/changepassword','HomeController@showChangePasswordForm');
Route::post('/changepassword','HomeController@changePassword')->name('changePassword');


Route::get('/profile', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/', 'ProfilesController@update')->name('profile.update');

Route::get('/course', 'CourseController@index')->name('course.show');
Route::post('/course', 'CourseController@store')->name('course.store');
Route::post('/course/edit', 'CourseController@edit')->name('course.edit');
Route::patch('/course/', 'CourseController@update')->name('course.update');
Route::get('/course/userdata', 'CourseController@getCourse')->name('course.getCourse');
Route::delete('/course/', 'CourseController@destroy')->name('course.destroy');

Route::get('/calender', 'HomeController@getCalender')->name('getCalender');
Route::get('/mailable', function () {

$user = App\User::find(1);
Mail::to($user->email)->send(new App\Mail\welcomeEmail($user));
Mail::to($user->email)->send(new App\Mail\verify($user));
$user->sendEmailVerificationNotification();

});