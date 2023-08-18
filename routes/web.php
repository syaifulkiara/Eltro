<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\FirmwareController;
use App\Http\Controllers\MelodyController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DokumentasiController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::resource('komponen', KomponenController::class);
Route::resource('overtime', OvertimeController::class);
Route::resource('firmware', FirmwareController::class);
Route::resource('melody', MelodyController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('dokumentasi', DokumentasiController::class);