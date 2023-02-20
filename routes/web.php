<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\SendMail;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('/');

Route::get('/login', [Authentication::class, 'login'])->name('login');
Route::get('/register', [Authentication::class, 'register'])->name('register');
Route::post('/signin', [Authentication::class, 'signIn'])->name('signin');
Route::post('/add-user', [Authentication::class, 'store'])->name('User_store');

Route::resource('users', UserController::class)->middleware('auth, admin');

// send Forgot Email
Route::get('/forgot-password', [ForgotController::class, 'resetPassword'])->name('password_reset');
Route::get('/reset_password', [ForgotController::class, 'sendEmail'])->name('reset_password');

// Change Password

Route::get('/Change/password/{id}', [ForgotController::class, 'Change_view'])->name('Change_view');
Route::get('change-password/{id}', [ForgotController::class, 'ChangePassword'])->name('Change_Password');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/animalProfile', function () {
    return view('animalProfile');
})->name('animalProfile');

Route::get('/howToUse', function () {
    return view('howToUse');
})->name('howToUse');


