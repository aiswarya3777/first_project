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
Route::view('float','float');
Route::view('machine_test','machine_test');
Route::view('grid','grid');
Route::view('grid_test','grid_test');
Route::view('grid_ex1','grid1_ex1');
Route::view('grid2','grid2');
Route::view('grid_work','grid_work');
Route::view('work2','grid_work2');
Route::view('work3','grid_work3');
Route::view('bootstrap','bootstrap1');
Route::view('table','bootstrap_table');
Route::view('form','bootstrap-form');
Route::view('sliding_navbar','sliding_navbar');
Route::view('javascript','javascript');
Route::view('projectdiv','project_div');
Route::view('alert_type','alert_js');
Route::view('if','if_condition_js');
Route::view('add-employee','add_employee');
Route::view('nested_if','nested_if');
Route::view('loop','loop');
Route::view('dowhile','do_while');
Route::view('function','function');
Route::view('ascending','ascending_order');
Route::view('second_highest','second_greatest');
Route::view('decalration','function_declaration');
Route::view('dom','dom');
Route::view('dom_by_class','dom_by_class');
Route::view('operation_by_selector','operation_by_selector');
Route::view('password','password_validation');
Route::view('todo','to_do');
Route::view('remove','remove_fruits');
Route::view('calculator','calculator');