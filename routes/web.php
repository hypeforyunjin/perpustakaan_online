<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;

Route::get('/',[UserController::class,'index']);
Route::post('/pengguna',[UserController::class,'insert']);
Route::get('/edit/{users}',[UserController::class,'show']);
Route::get('/TambahBuku',[BooksController::class,'index']);
Route::get('/Buku',[BooksController::class,'list_buku']);
Route::put('/edit/{users}',[UserController::class,'update'])->name('editSubmit');

