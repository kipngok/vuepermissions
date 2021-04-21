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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/user','App\Http\Controllers\UserController');
Route::resource('/product','App\Http\Controllers\ProductController');
Route::resource('/category','App\Http\Controllers\CategoryController');
Route::resource('/customer','App\Http\Controllers\CustomerController');
Route::resource('/role','App\Http\Controllers\RoleController');
Route::resource('/company','App\Http\Controllers\CompanyController');
Route::resource('/sms','App\Http\Controllers\SmsController');
Route::get('/v1/access/token','App\Http\Controllers\MpesaController@generateAccessToken');
