<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->prefix('/students')->middleware(['auth'])->group(function () {
    Route::get('/', 'listStudents');
    Route::get('/{id}', 'showStudent');
    Route::get('/{id}/{name?}', 'studentDetails');
    Route::get('/create', 'createStudent');
    Route::get('/{id}/edit', 'editStudent');
    Route::post('/', 'addStudent');
    Route::delete('/{id}', 'removeStudent');
    Route::put('/{id}', 'updateStudent');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
