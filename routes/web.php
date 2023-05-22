<?php

use App\Http\Controllers\AdminDivisiController;
use App\Http\Controllers\AdminPerusahaanController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\byClientsController;
use App\Http\Controllers\byDivisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultanBeritaAcaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/profiles', function(){
    return view('dashboard.profiles.index');
})->middleware('auth');

Route::get('/dashboard/byDivisis', [byDivisiController::class, 'index'])->middleware('auth');
Route::get('/dashboard/byDivisis/{slug}', [byDivisiController::class, 'show'])->middleware('auth');

Route::get('/dashboard/byClients', [byClientsController::class, 'index'])->middleware('auth');
Route::get('/dashboard/byClients/{slug}', [byClientsController::class, 'show'])->middleware('auth');

Route::resource('/dashboard/users', AdminUserController::class)->middleware('is_admin');
Route::resource('/dashboard/perusahaans', AdminPerusahaanController::class)->middleware('is_admin');
Route::resource('/dashboard/divisis', AdminDivisiController::class)->middleware('is_admin');

Route::resource('/dashboard/beritaAcaras', KonsultanBeritaAcaraController::class)->middleware('is_konsultan');