<?php


use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnimalQrCode;
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
// home page
Route::get('/', function () {
    return view('home');
})->name('/');


Route::resource('animals', AnimalController::class);

Route::get('/contact-us',[ContactController::class,'contact'])->name('contactUs');;
Route::post('/contact-us',[ContactController::class,'sendEmail'])->name('contact');


// authentication
Route::get('/login', [Authentication::class, 'login'])->name('login');
Route::get('/register', [Authentication::class, 'register'])->name('register');
Route::post('/signIn', [Authentication::class, 'signIn'])->name('signin');
Route::post('/add-user', [Authentication::class, 'store'])->name('User_store');

Route::resource('users', UserController::class)->middleware('auth, admin');


// send Forgot Email
Route::get('/forgot_password', [ForgotController::class, 'resetPassword'])->name('password_reset');
Route::get('/reset_password', [ForgotController::class, 'sendEmail'])->name('reset_password');

// Change Password

Route::get('ahdcevjdajdhiagdndheafbefkaeifgajkhaegfalncjaebchefkfjabfk/{id}', [ForgotController::class, 'Change_view'])->name('Change_view');
Route::get('change-password/{id}', [ForgotController::class, 'ChangePassword'])->name('Change_Password');

// about page
Route::get('/about', function () {
    return view('about');
})->name('about');


// How to use page
Route::get('/howToUse', function () {
    return view('howToUse');
})->name('howToUse');


Route::get('/tag/{id}', [AnimalQrCode::class, 'findQrId']);
Route::post('/add-animal', [AnimalQrCode::class, 'AddAnimal'])->name('create-animal');




Route::view('admin-users','admin/users/index')->name('admin-users');
Route::view('admin-animals','admin/animals/index')->name('admin-animals');
