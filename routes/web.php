<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VillageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/village', [VillageController::class, 'showVillage'])->middleware('auth');

Route::post('/buildings/{id}/upgrade', [BuildingController::class, 'upgrade'])->name('buildings.upgrade');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
