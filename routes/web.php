<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::redirect('/', '/siswa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('siswa', SiswaController::class)->middleware('auth');
Route::resource('user', UserController::class )->middleware('auth');
Route::post('/terima/{id}', [SiswaController::class, 'terima'])->name('siswa.terima');
Route::post('/tolak/{id}', [SiswaController::class, 'tolak'])->name('siswa.tolak');
