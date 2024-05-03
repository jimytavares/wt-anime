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
    Route::put('/api/decreExp/{idUser}', [ProfilleController::class, 'decreExp'])->name('decreExp');
    Route::put('/api/plusDate/{idAnime}', [ProfilleController::class, 'plusDate'])->name('plusDate');
    Route::get('/api/create_parados/{id_assist}', [ProfilleController::class, 'createParados'])->name('createParados');
    
    Route::get('/habilidades/formanime', [PageController::class, 'formAnime'])->name('formAnime');
    Route::post('/habilidades/formanime', [ProfilleController::class, 'form_anime_post'])->name('form_anime_post');
    Route::get('/habilidades/assistir-anime', [PageController::class, 'form_assistindo'])->name('form_assistindo');
    Route::post('/habilidades/assistir-anime', [ProfilleController::class, 'form_assistindo_post'])->name('form_assistindo_post');
    Route::get('/habilidades/list_anime', [PageController::class, 'list_anime'])->name('list_anime');
    
});
