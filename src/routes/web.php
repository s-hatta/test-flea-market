<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

Route::get('/', [ItemController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('sell', [ItemController::class, 'sell']);
    Route::get('/mypage/profile', [UserController::class, 'edit']);
});