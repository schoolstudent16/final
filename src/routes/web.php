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

Route::get('/top',"App\Http\Controllers\WordNoteController@transition");
//Route::get('/account',function () {return view("final.account");});
Route::get('/addition',function () {return view("final.word_add");});
Route::get('/show',"App\Http\Controllers\WordNoteController@sql_select");
//Route::post('/login',"App\Http\Controllers\WordNoteController@login");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
