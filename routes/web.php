<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk resource Mapel dan Kelas
Route::resource('mapel', MapelController::class);
Route::resource('kelas', KelasController::class);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'pengguna']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


// Rute untuk halaman utama
Route::get('/', function () {
    return view('homepage');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/about' , function(){
    return view('about');
});
// routes/web.php
Route::get('/data-mata-pelajaran', function(){
    return view('data-mata-pelajaran');
})->name('data-mata-pelajaran');

Route::get('/inggris' , function(){
    return view('mapel/inggris');
});
Route::get('/biologi' , function(){
    return view('mapel/biologi');
})->name('biologi');

Route::get('/matematika' , function(){
    return view('mapel/matematika');
});
Route::get('/vidio-matematika' , function(){
    return view('mapel/vidio/matematika');
});
Route::get('/vidio-biologi' , function(){
    return view('mapel/vidio/biologi');
});
Route::get('/vidio-inggris' , function(){
    return view('mapel/vidio/inggris');
});
Route::get('/rating' , function(){
    return view('rating');
});
