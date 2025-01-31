<?php

use App\Http\Controllers\DiaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index'); //viewはRoutingがあるときのみ、そのほかは直書きで
Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create');
Route::post('/diary', [DiaryController::class, 'store'])->name('diary.store');
Route::get('/diary/{id}', [DiaryController::class, 'show'])->name('diary.show'); //ページを表示する