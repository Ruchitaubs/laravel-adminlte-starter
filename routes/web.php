<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Public Routes (No Login Required)
|--------------------------------------------------------------------------
*/

 
Route::get('/', function () {
    return view('frontend.home');
})->name('home');


Route::get('/home', function () {
    return redirect()->route('home');
});

/*
|--------------------------------------------------------------------------
| Protected Routes (Admin Login)
|--------------------------------------------------------------------------
*/
 
 
Route::middleware(['auth', 'role:admin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Protected Routes (Login + Email Verification Required)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    
	// Search functionality
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::post('/search', [SearchController::class, 'execute'])->name('search.execute');
	
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
