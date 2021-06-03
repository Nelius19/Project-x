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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Lecturer routes
Route::group(['middleware' => ['auth', 'lecturer']], function(){
    Route::get('/dashboard', [App\Http\Controllers\Lecturer\DashboardController::class, 'index'])->name('dashboard');
});

//Student routes
Route::group(['middleware' => ['auth', 'student']], function(){
    Route::get('/home', [App\Http\Controllers\Student\HomeController::class, 'index'])->name('home');
    Route::get('/auth/{id}', [App\Http\Controllers\Student\HomeController::class, 'show']);
    Route::post('/assessment', [App\Http\Controllers\Student\HomeController::class, 'getAssessment'])->name('assessment');
});
   

