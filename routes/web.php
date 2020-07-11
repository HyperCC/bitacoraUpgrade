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

Route::get('dashboard', function () {
    return view('dashboard');
});

// Rutas para el login.
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Ruta para mostrar todos los usuarios juntos.
//Route::get('users-index/', 'UserController@index')->name('users-index');

// Ruta para la creacion de un usuario.
Route::get('users-create/', 'UserController@create')->name('users-create');
//Ruta para almacenar un usuario.
Route::post('users-store/', 'UserController@store')->name('users-store');


Route::get('/home', 'HomeController@index')->name('home');

