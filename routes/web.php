<?php

use App\Http\Controllers\TamuController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tamu', 'TamuController');
Route::get('/tamu', 'TamuController@index')->name('tamus');
Route::get('/tamu/create', 'TamuController@create');
Route::get('/tamu/show', 'TamuController@show');
Route::get('/tamu/edit', 'TamuController@edit');
Route::post('/tamu/store', 'TamuController@store');
Route::put('/tamu/update', 'TamuController@update');
Route::post('/tamu/destroy', 'TamuController@destroy');