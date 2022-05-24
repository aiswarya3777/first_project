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

// Route::get('index', function () {
//     return view('welcome');
// });

// "view" command only to view the page
Route::view('/','welcome')->name('welcome');

//by using the "name" the changes inside the code will not affect the url. 
Route::view('home','home')->name('home');
Route::view('index','index')->name('index');
Route::view('prop','display_prop');
