<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactController;
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


Route::resource('animals', AnimalController::class);

Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/contact-us',[ContactController::class,'sendEmail'])->name('contact');
