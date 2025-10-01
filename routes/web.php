<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [siswaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('siswa', siswaController::class);
    Route::get('contacts/create', [siswaController::class, 'create'])->name('contacts.create');
});

require __DIR__.'/auth.php';
