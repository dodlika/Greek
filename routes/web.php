<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\GrammarController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Word routes
Route::get('/words', [WordController::class, 'index'])->name('words.index');
Route::get('/words/search', [WordController::class, 'search'])->name('words.search');
Route::get('/words/{id}', [WordController::class, 'show'])->name('words.show');

// Grammar routes
Route::get('/grammar', [GrammarController::class, 'index'])->name('grammar.index');
Route::get('/grammar/category/{category}', [GrammarController::class, 'byCategory'])->name('grammar.category');
Route::get('/grammar/{id}', [GrammarController::class, 'show'])->name('grammar.show');