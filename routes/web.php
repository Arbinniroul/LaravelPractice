<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home',[UserController::class,'getHome']);
Route::post("addUser",[UserController::class,'addUser']);
Route::view("/user-form",'user-form');
Route::get('/user',[UserController::class,'getUser']);
Route::get('/about',[UserController::class,'aboutUser']);
Route::get('getuser/{name}',[UserController::class,'getUserName']);
Route::get('admin',[UserController::class,'adminPage']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
