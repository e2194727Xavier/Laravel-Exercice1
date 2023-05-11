<?php

use App\Http\Controllers\ExerciceController;
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

Route::get('/home',[ExerciceController::class,"index"]);
Route::get('/projects',[ExerciceController::class,"projects"]);
Route::get('/resume',[ExerciceController::class,"resume"]);
Route::get('/contact',[ExerciceController::class,"contact"]);
Route::post('/contact',[ExerciceController::class,"contactForm"]);
