<?php

use App\Http\Livewire\ArticleForm;
use App\Http\Livewire\Articles;
use App\Http\Livewire\ArticleShow;
use App\Http\Livewire\Guest\TableContents;
use Illuminate\Support\Facades\Route;


Route::get('/', Articles::class)->name('articles.index');


/***************** Inicio rutas de invitados ********************/
Route::get('/contenido/programatico',TableContents::class)->name('guest.tablesContent');
/***************** Fin rutas de invitados ********************/

Route::get('/blog/crear',ArticleForm::class)->name('articles.create')->middleware(['auth:sanctum', 'verified']);
Route::get('/blog/{article}/edit',ArticleForm::class)->name('articles.edit')->middleware(['auth:sanctum', 'verified']);
Route::get('/blog/{article}',ArticleShow::class)->name('articles.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
