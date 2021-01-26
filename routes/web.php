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
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\EmployeeController;

Route::get('/home', [FactoryController::class, 'index']);

Route::get('/home/login', [EmployeeController::class, 'login']);
