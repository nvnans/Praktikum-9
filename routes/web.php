<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return 'Selamat Datang';
});

Route::get('/kabar', function () {
    return view('Kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/skill', [SkillController::class, 'index']);

Route::post('/skillhasil', [SkillController::class, 'skillhasil']);