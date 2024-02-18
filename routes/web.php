<?php

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

// Route::redirect('/students', '/');

// Route::view('/', 'welcome');

Route::prefix('/students')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return 'Students List';
    });
    Route::get('/{id}', function ($id) {
        return 'Student number ' . $id;
    });
    Route::get('/{id}/{name?}', function ($id, $name = ' ') {
        return 'Student number ' . $id . " named " . $name;
    });
    Route::get('/create', function () {
        return 'Student user created';
    });
    Route::get('/{id}/edit', function ($id) {
        return 'This is edit form of student ' . $id;
    });
    Route::post('/', function () {
        return 'Student added';
    });
    Route::delete('/{id}', function ($id) {
        return 'Student number ' . $id . ' is deleted';
    });
});


Route::put('/student/{id}', function ($id) {
    return 'Student number ' . $id . ' is updated';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
