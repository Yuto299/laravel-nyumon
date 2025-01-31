<?php

use App\Http\Controllers\DiaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index'); //viewはRoutingがあるときのみ、そのほかは直書きで
