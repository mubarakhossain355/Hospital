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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_doctor_view', [App\Http\Controllers\AdminController::class, 'addview']);
Route::post('/upload_doctor', [App\Http\Controllers\AdminController::class, 'upload']);

Route::post('/appointment', [App\Http\Controllers\HomeController::class, 'appointment']);
Route::get('/myappointment', [App\Http\Controllers\HomeController::class, 'myappointment']);
Route::get('/cancel_appointment/{id}', [App\Http\Controllers\HomeController::class, 'cancel_appointment']);

Route::get('/showappointment', [App\Http\Controllers\AdminController::class, 'showappointment']);
Route::get('/approved/{id}', [App\Http\Controllers\AdminController::class, 'approved']);
Route::get('/canceled/{id}', [App\Http\Controllers\AdminController::class, 'canceled']);
Route::get('/showdoctor', [App\Http\Controllers\AdminController::class, 'showdoctor']);
Route::get('/deletedoctor/{id}', [App\Http\Controllers\AdminController::class, 'deletedoctor']);
Route::get('/updatedoctor/{id}', [App\Http\Controllers\AdminController::class, 'updatedoctor']);
Route::post('/editdoctor/{id}', [App\Http\Controllers\AdminController::class, 'editdoctor']);
