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

Route::get('/account/profile', 'AccountController@profile')->name('profile');
Route::get('/account/settings', 'AccountController@settings')->name('settings');
Route::get('/account/addresses', 'AccountController@address')->name('address');
Route::get('/account/billing', 'AccountController@billing')->name('billing');
Route::get('/account/activity', 'AccountController@activity')->name('activity');
Route::get('/account/payment-history', 'AccountController@paymenthistory')->name('payment-history');
Route::get('/account/notifications', 'AccountController@notifications')->name('notifications');
Route::get('/application/widgets', 'AccountController@widgets')->name('widgets');

Route::post('/account/profilesubmit', 'AccountController@profilesubmit')->name('profile-submit');
Route::post('/account/settingsupdate', 'AccountController@settingsupdate')->name('settings-update');
Route::post('/change-password', 'ChangePasswordController@store')->name('change.password');

//Route::get('/application/{slug?}/{slug2?}', function () { return file_get_contents(public_path().'/docs/index.html'); });

Route::get('/application/{slug1?}/{slug2?}', 'ProjectController@index')->name('projects');


