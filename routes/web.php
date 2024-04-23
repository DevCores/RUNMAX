<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::controller(DashboardController::class)->group(function(){
    Route::prefix('dashboard')->as('dashboard.')->group(function(){
        Route::get('/', 'dashboard')->name('index');
    });
    Route::prefix('roles')->as('roles.')->group(function(){
        Route::get('/', 'roles')->name('index');
    });
    Route::prefix('instructions')->as('instructions.')->group(function(){
        Route::get('/', 'instructions')->name('index');
    });
    Route::prefix('transactions')->as('transactions.')->group(function(){
        Route::get('/', 'transactions')->name('index');
    });
    Route::prefix('finance')->as('finance.')->group(function(){
        Route::get('/', 'finance')->name('index');
    });
    Route::prefix('supplies')->as('supplies.')->group(function(){
        Route::get('/', 'supplies')->name('index');
    });
    
})->middleware(['auth', 'verified'])->name('pages');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
