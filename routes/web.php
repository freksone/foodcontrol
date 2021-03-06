<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});


Route::resource('/Empleados', 'EmpleadosController')->middleware('auth');
Route::resource('/Comidas', 'comidasController')->middleware('auth');
Route::resource('/Join_table', 'JoinTableController')->middleware('auth');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


