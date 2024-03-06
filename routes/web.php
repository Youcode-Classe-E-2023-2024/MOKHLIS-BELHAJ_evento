<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordControlle;

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
})->name('home');
// authentication
// **************


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [loginController::class, 'store'])->middleware('guest');
Route::get('/logout', [LogoutController::class, 'destroy'])->middleware('auth')->name('logout');

// la réinitialisation du mot de passe
// ***********************************


// Afficher le formulaire de demande de réinitialisation
Route::get('/mot-de-passe/reinitialiser', [ForgotPasswordControlle::class, 'showLinkRequestForm'])->name('password.request');
// Envoyer l'e-mail de réinitialisation
Route::post('/mot-de-passe/email', [ForgotPasswordControlle::class, 'sendResetLinkEmail'])->name('password.email');
// Afficher le formulaire de réinitialisation avec le jeton
Route::get('/mot-de-passe/reinitialiser/{token}', [ForgotPasswordControlle::class, 'showResetForm'])->name('password.reset');
// Gérer la réinitialisation du mot de passe
Route::post('/mot-de-passe/reinitialiser', [ForgotPasswordControlle::class, 'reset'])->name('password.update');
