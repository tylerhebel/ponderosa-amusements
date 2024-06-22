<?php

use App\Http\Controllers\LeagueController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $leagues = \App\Models\League::all();
    return view('welcome', compact('leagues'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/league', [LeagueController::class, 'index'])->name('league.index');
    Route::patch('/league', [LeagueController::class, 'update'])->name('league.update');
    Route::delete('/league', [LeagueController::class, 'destroy'])->name('league.destroy');
});


require __DIR__.'/auth.php';
