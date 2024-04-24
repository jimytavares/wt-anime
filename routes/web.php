<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilleController;


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::get('/', [ProfilleController::class, 'welcome'])->name('welcome');
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    
});
