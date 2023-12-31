<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('courses')->group(function () {
    Route::get('', [CoursesController::class, 'index'])->name('courses');
    Route::get('/{id}', [CoursesController::class, 'detail']);
    Route::get('/{courseId}/content/{contentId}', [CoursesController::class, 'content']);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin');
    Route::post('/logout', 'doLogout');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister');
});
