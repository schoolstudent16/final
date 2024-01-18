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

Route::get('/top',"App\Http\Controllers\WordNoteController@top");
//Route::get('/account',function () {return view("final.account");});
Route::get('/addition',"App\Http\Controllers\WordNoteController@create_note");
Route::get('/show',"App\Http\Controllers\WordNoteController@sql_select");
Route::post('/add',"App\Http\Controllers\WordNoteController@insert_db");
Route::post('/delete',"App\Http\Controllers\WordNoteController@sql_delete");
Route::post('/update',"App\Http\Controllers\WordNoteController@sql_update");
Route::post('/confirm_update',"App\Http\Controllers\WordNoteController@update");
Route::post('/confirm_delete',"App\Http\Controllers\WordNoteController@delete");
Route::get('/top_return',"App\Http\Controllers\WordNoteController@top");
Route::get('/top_return',"App\Http\Controllers\WordNoteController@top");
//Route::post('/login',"App\Http\Controllers\WordNoteController@login");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
