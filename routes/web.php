<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\Carrier_Collaboration\CarrierRegistrationController;
use App\Http\Controllers\CarrierController;

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

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');

// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

//Carrier_Collaboration
Route::get('/Carrier_Collaboration/CarrierRegistration', [CarrierRegistrationController::class, 'index']);

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');
});

//Carrier Registration
Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier.index');
Route::get('/carrier/create', [CarrierController::class, 'create'])->name('carrier.create');
Route::post('/carrier', [CarrierController::class, 'store'])->name('carrier.store');
Route::get('/carrier/{id}/edit', [CarrierController::class, 'edit'])->name('carrier.edit');
Route::put('/carrier/{id}', [CarrierController::class, 'update'])->name('carrier.update');
Route::delete('/carrier/{id}', [CarrierController::class, 'destroy'])->name('carrier.destroy');
Route::post('/carrier/register', [CarrierController::class, 'register'])->name('carrier.register');
Route::put('/carrier/{id}', [CarrierController::class, 'update'])->name('carrier.update');
Route::get('/carriers/{carrier}', [CarrierController::class, 'show'])->name('carrier.show');
// End Carrier Registration
