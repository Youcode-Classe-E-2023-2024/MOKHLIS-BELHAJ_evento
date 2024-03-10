<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordControlle;
use App\Http\Controllers\organisateur\DashboardController as Organisateur;

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
Route::get('/home', function () {
    return view('welcome');
});
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

// detail de chaque event 
// ***********************************

Route::get('/event/{id}' , [EventController::class, 'show' ])->name('DetailPage');
Route::get('/payment/{id}' , [EventController::class, 'reservation' ])->middleware('auth')->name('payment');

// admin
// ********************************
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth','role:admin')->name('dashboard');
Route::get('/dashboard/role',[RolesController::class,'index'])->middleware('auth','role:admin')->name('Role'); 
Route::get('/dashboard/role/{id}',[RolesController::class,'show'])->middleware('auth','role:admin')->name('role.update'); 
Route::post('/dashboard/role/edite/',[RolesController::class,'update'])->middleware('auth','role:admin')->name('role.edite'); 
Route::post('/dashboard/event/{id}',[DashboardController::class,'edit'])->middleware('auth','role:admin')->name('event.edite'); 
Route::get('/dashboard/Categories',[CategorieController::class, 'index'])->middleware('auth','role:admin')->name('Categorie');
Route::post('/dashboard/Categories/new',[CategorieController::class, 'store'])->middleware('auth','role:admin')->name('Categorie.new');
Route::get('/dashboard/Categories/{id}',[CategorieController::class, 'show'])->middleware('auth','role:admin')->name('Categorie.edit');
Route::put('/dashboard/Categories/update/{id}',[CategorieController::class, 'update'])->middleware('auth','role:admin')->name('Categorie.update');
Route::delete('/dashboard/Categories/delete/{id}',[CategorieController::class, 'destroy'])->middleware('auth','role:admin')->name('categorie.delete');
// Organisateur
// ********************************
Route::get('/organisateur',[Organisateur::class, 'index'])->middleware('auth','role:organisateur')->name('dashboard.organisateur');
