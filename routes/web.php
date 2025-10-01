<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
<<<<<<< HEAD
use App\Http\Controllers\QuestionController;
=======
>>>>>>> e6e8835b373b6fff3ace09c90bdd8b5f1da1d1e0


Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
<<<<<<< HEAD
});
=======
}); 
>>>>>>> e6e8835b373b6fff3ace09c90bdd8b5f1da1d1e0
Route::get('/nama1/{param1?}/{nim?}', function ($param1 = '', $nim = '') {
    return 'nama saya: '.$param1. '<br> NIM: '.$nim;
});
Route::get('/about', function () {
    return view('halaman-about');
});

<<<<<<< HEAD
Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
=======
Route::get('/home', [HomeController::class, 'index']);
>>>>>>> e6e8835b373b6fff3ace09c90bdd8b5f1da1d1e0
