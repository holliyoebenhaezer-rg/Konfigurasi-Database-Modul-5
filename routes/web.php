<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

use App\Http\Controllers\DashboardTubesController;

Route::get('/pandeglangtrip', [DashboardTubesController::class, 'index'])->name('tubes.dashboard');
Route::view('/pandeglangtrip/tur', 'tubes.tur_tubes')->name('tubes.tur');
Route::view('/pandeglangtrip/wisata', 'tubes.wisata_tubes')->name('tubes.wisata');
Route::view('/pandeglangtrip/faq', 'tubes.faq_tubes')->name('tubes.faq');
