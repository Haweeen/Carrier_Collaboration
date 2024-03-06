<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\lms_g50_carriersController;
use App\Http\Controllers\pages\RoleController;
use App\Http\Controllers\pages\UserController;
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


//User Registration
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

//User login
Route::get('/login', [AuthController::class, 'login'])->name('login');




Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');
  //Carrier Crud-Registration
  Route::resource('carriers', lms_g50_carriersController::class);
});

Route::resources([
  'roles' => RoleController::class,
  'users' => UserController::class,
]);
