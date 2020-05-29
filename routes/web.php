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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','BooksController@index');
Route::get('/issuebook','BooksController@issue');
Route::get('/returnbook/{id}','BooksController@returnbook');
Route::post('/issuebook/store','BooksController@store');
Route::get('/duelist','BooksController@duelist');
Route::get('/studentreport','BooksController@studentreport');
