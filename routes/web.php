<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilleController;
use App\Http\Controllers\PageController;

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    
    Route::get('/', [PageController::class, 'welcome'])->name('welcome');
    Route::put('/api/plusanime/{id_anime}/{id_assist}', [ProfilleController::class, 'plusAnime'])->name('plusAnime');
    Route::put('/api/decreAmime/{id_anime}/{id_assist}', [ProfilleController::class, 'decreAnime'])->name('decreAnime');
    Route::put('/api/plusExp/{idUser}', [ProfilleController::class, 'plusExp'])->name('plusExp');
    Route::put('/api/plusDate/{idAnime}', [ProfilleController::class, 'plusDate'])->name('plusDate');
    Route::get('/api/create_parados/{id_assist}', [ProfilleController::class, 'createParados'])->name('createParados');
    
    Route::get('/admin/formanime', [PageController::class, 'formAnime'])->name('formAnime');
    Route::post('/admin/formanime', [ProfilleController::class, 'formAnimePost'])->name('formAnimePost');
    Route::get('/admin/list_anime', [PageController::class, 'list_anime'])->name('list_anime');
    
});
