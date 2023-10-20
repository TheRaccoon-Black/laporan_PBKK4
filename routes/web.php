<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkuntansiController;
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
Route::get("/", [AkuntansiController::class,'index']);
Route::get('/create', [AkuntansiController::class,'create']);
Route::post('/store', [AkuntansiController::class,'store']);
Route::get('/show/{id}', [AkuntansiController::class,'show']);
Route::post('/update/{id}', [AkuntansiController::class,'update']);
Route::get('/destroy/{id}', [AkuntansiController::class,'destroy']);