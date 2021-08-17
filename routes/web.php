<?php

use App\Http\Controllers\JobsController;
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

Auth::routes();

//Jobs Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/post-job", [App\Http\Controllers\JobsController::class, 'index']);
Route::post("/post-job", [App\Http\Controllers\JobsController::class, 'store']);
Route::post("/job-upload-file", [App\Http\Controllers\JobsController::class, 'uploadfile']);
Route::post("/addfiles", [App\Http\Controllers\JobsController::class, 'AddFiles']);
Route::delete("/job-upload-file-delete", [App\Http\Controllers\JobsController::class, 'removeFile']);
Route::get("/jobs", [App\Http\Controllers\JobsController::class, 'listJobs']);
Route::post("/jobs-sociallinks", [App\Http\Controllers\JobsController::class, 'AddSocialLinks']);

//Developers Routes
Route::get("/register-developer" ,[App\Http\Controllers\DeveloperController::class, 'index']);
Route::get("/laravel-developers" ,[App\Http\Controllers\DeveloperController::class, 'index']);