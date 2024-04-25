<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilleController;


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    
    Route::get('/', [ProfilleController::class, 'welcome'])->name('welcome');
    Route::put('/api/plusanime/{id_anime}/{id_assist}', [ProfilleController::class, 'plusAnime'])->name('plusAnime');
    Route::put('/api/decreAmime/{id_anime}/{id_assist}', [ProfilleController::class, 'decreAnime'])->name('decreAnime');
    
});
