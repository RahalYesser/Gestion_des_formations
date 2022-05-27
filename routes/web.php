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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/loginadmin', [App\Http\Controllers\PageController::class, 'loginadmin'])->name('loginadmin');
Route::get('/adminpage', [App\Http\Controllers\PageController::class, 'adminpage'])->name('adminpage');
Route::get('/etudiantlist', [App\Http\Controllers\PageController::class, 'etudiantlist'])->name('etudiantlist');
Route::get('/loginetudiant', [App\Http\Controllers\PageController::class, 'loginetudiant'])->name('loginetudiant');
Route::get('/profiletudiant', [App\Http\Controllers\PageController::class, 'profiletudiant'])->name('profiletudiant');
Route::get('/userpage', [App\Http\Controllers\PageController::class, 'userpage'])->name('userpage');
Route::get('/register', [App\Http\Controllers\PageController::class, 'register'])->name('register');



