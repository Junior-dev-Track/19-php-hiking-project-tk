<?php

use App\Http\Controllers\HikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::post('/login', [AuthenticatedSessionController::class, 'login'])->name('login');

Route::get('/', [HikeController::class, 'showHikes']);
Route::get('/hikes/add', [HikeController::class, 'addHikeForm'])->middleware('auth');
Route::post('/hikes/add', [HikeController::class, 'addHike'])->middleware('auth');
Route::post('/login', [UserController::class, 'login']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/subscribe', [UserController::class, 'showSubscriptionForm']);
Route::post('/subscribe', [UserController::class, 'subscribe']);
Route::get('/hikes/{selectedHikeId?}', [HikeController::class, 'showHikes'])->middleware('auth');

require __DIR__.'/auth.php';
