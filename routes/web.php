<?php

use App\Http\Livewire\ArticleForm;
use App\Http\Livewire\Articles;
use App\Http\Livewire\ArticleShow;
use Illuminate\Support\Facades\Route;


Route::get('/', Articles::class)->name('articles.index');

Route::get('/blog/crear',ArticleForm::class)->name('articles.create')->middleware(['auth:sanctum', 'verified']);
Route::get('/blog/{article}/edit',ArticleForm::class)->name('articles.edit')->middleware(['auth:sanctum', 'verified']);
Route::get('/blog/{article}',ArticleShow::class)->name('articles.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
