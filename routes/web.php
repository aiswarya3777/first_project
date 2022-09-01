<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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
//CRUD
Route::view('sum','LARAVEL_CRUD/sum')->name('sum');//first one for link and second is the correct path in resource
Route::post('sum',[App\Http\Controllers\adding_controller::class,'add']);//sum link then in controller second = that controller and class,function name

//register form
Route::post('register',[App\Http\Controllers\adding_controller::class,'register']);
Route::view('register','LARAVEL_CRUD/register_form')->name('register');

//view detail page (data retrive )
Route::view('details','LARAVEL_CRUD/register_details')->name('data_retrive');
Route::get('details',[App\Http\Controllers\adding_controller::class,'data_retrive']);

// "view" command only to view the page
Route::view('/','welcome')->name('welcome');

//delete
// Id is default usage
Route::get('delete/{Id}',[App\Http\Controllers\adding_controller::class,'deletedb']);

//update data getting
Route::get('update/{Id}',[App\Http\Controllers\adding_controller::class,'update']);

//updated data
Route::post('updated/{Id}',[App\Http\Controllers\adding_controller::class,'button_update_click']);

//login_crud
Route::view('login_crud','LARAVEL_CRUD/login')->name('login');
Route::post('login_crud',[App\Http\Controllers\adding_controller::class,'login']);

//logout
Route::get('logout',[App\Http\Controllers\adding_controller::class,'logout']);

//profile
Route::get('profile',[App\Http\Controllers\adding_controller::class,'profile']);

//file upload
Route::view('file_upload','LARAVEL_CRUD/file_upload');
Route::post('file_upload',[App\Http\Controllers\adding_controller::class,'upload']);
Route::get('file_upload',[App\Http\Controllers\adding_controller::class,'upload_retrive']);

//registration using model

Route::view('model_reg','LARAVEL_CRUD/model_reg_form');
Route::post('model_reg',[App\Http\Controllers\ModelController::class,'reg_insert']);

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
Route::view('calculator','calculator1');
Route::view('form','form_js');
Route::view('dumbell','dumbell');
Route::view('slice','slice');
Route::view('count','count_print');
Route::view('array_method','array_method');
Route::view('shift','js_array_shift');
Route::view('jquery','jquery');
Route::view('call_back','call_back');
Route::view('cartoon','image_cartoon');
Route::view('learn','jquery_learn');
Route::view('add_class','add_class');
Route::view('traversing','traversing');
Route::view('form_validation','form_validation');
Route::view('html_method','html_method');
Route::view('form_learn','form_val_learn');
Route::view('slider','slider');
Route::view('palindrome','palindrome');
// Route::view('login','login');
Route::post("user",[UserAuth::class,'userLogin']);
// Route::view('profile','profile');

