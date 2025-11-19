<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('role:SuperAdmin')->name('home');

Route::middleware(['auth', 'role:SuperAdmin'])->prefix('admin')->group(function() {
    Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');
    Route::get('/schools/create', [SchoolController::class, 'create'])->name('schools.create');
    Route::post('/schools/store', [SchoolController::class, 'store'])->name('schools.store');
    Route::get('/schools/{school}/show', [SchoolController::class, 'show'])->name('schools.show');
    Route::get('/schools/{school}/edit', [SchoolController::class, 'edit'])->name('schools.edit');
    Route::put('/schools/{school}/update', [SchoolController::class, 'update'])->name('schools.update');
    Route::delete('schools/{school}', [SchoolController::class, 'destroy'])->name('schools.destroy');
});
