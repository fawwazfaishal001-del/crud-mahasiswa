<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('mahasiswa.index'));
Route::resource('mahasiswa', MahasiswaController::class)->except(['show']);
