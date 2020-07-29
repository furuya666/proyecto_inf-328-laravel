<?php

use App\Http\Controllers\HabilitadoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//Route::get('/habilitados','HabilitadoController@index');
//Route::get('/habilitados/create','HabilitadoController@create');
Route::resource('habilitados', 'HabilitadoController')->middleware('auth');
Route::resource('personas', 'PersonaController')->middleware('auth');
Route::resource('bonos', 'BonoController')->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
