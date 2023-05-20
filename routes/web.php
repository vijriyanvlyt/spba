<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\KonsultanBeritaAcaraController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultanUploadArsipController;
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

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/users', AdminUserController::class)->middleware('is_admin');
Route::resource('/dashboard/clients', AdminUserController::class)->middleware('is_admin');

Route::resource('/dashboard/uploadarsip', KonsultanUploadArsipController::class)->middleware('is_konsultan');
Route::resource('/dashboard/buatberitaacaras', KonsultanBeritaAcaraController::class)->middleware('is_konsultan');