<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;



Route::get('/' , [BookController::class , 'bookShow' ])->name('welcome');
Route::get('/books/{book}' , [BookController::class , 'detailPage' ])->name('details');
