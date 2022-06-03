<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formationController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\CustomAuthController;
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

// Route::get('/register', [App\Http\Controllers\PageController::class, 'register'])->name('register');
// Route::get('/adminpage', [App\Http\Controllers\PageController::class, 'adminpage'])->name('adminpage');
// Route::get('/etudiantlist', [App\Http\Controllers\PageController::class, 'etudiantlist'])->name('etudiantlist');
//Route::get('/loginetudiant', [App\Http\Controllers\PageController::class, 'loginetudiant'])->name('loginetudiant');
//Route::get('/userpage', [App\Http\Controllers\PageController::class, 'userpage'])->name('userpage');
Route::post('/InsertSuccess', [CustomAuthController::class, 'insert']);
Route::get('/dl/{id}', [formationController::class, 'destroy']);
Route::get('/adminpage',[formationController::class,'readDataForAdmin'])->name('adminpage');
Route::get('/userpage',[formationController::class,'readDataForUser'])->name('userpage'); 
Route::get('/userpage/{id}',[formationController::class,'readDataForUser']); 
Route::get('/profiletudiant', [App\Http\Controllers\PageController::class, 'profiletudiant'])->name('profiletudiant');



Route::get('/etudiantlist',[studentController::class,'readData'])->name('etudiantlist');

Route::get('login', [CustomAuthController::class, 'index'])->name('loginetudiant');
Route::get('admin', [CustomAuthController::class, 'adminlogin'])->name('loginadmin');
Route::post('/login.custom', [CustomAuthController::class, 'customLogin']);
Route::post('/Admin', [CustomAuthController::class, 'Admin']);
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


