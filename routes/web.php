<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Quiz-8020170084', function () {
    return view('form');
})->name('hitungluas');

Route::post('/hasil', [App\Http\Controllers\HitungLuasController::class, 'hitung'])->name('hitungHasil');