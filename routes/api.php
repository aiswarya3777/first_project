<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('api_registration',[ApiController::class,'registration']);
Route::delete('api_delete/{Id}',[ApiController::class,'delete_api']);
Route::put('api_update/{Id}',[ApiController::class,'api_update']);
Route::get('data_retrive',[ApiController::class,'data_retrive']);
Route::get('one_data/{Id}',[ApiController::class,'one_data_retrive']);
Route::get('search_name',[ApiController::class,'checking_name']);


