<?php

use App\Http\Controllers\ApiDiaryController;
use Illuminate\Support\Facades\Route;

Route::get('/diary', [ApiDiaryController::class, 'index']);  // 一覧取得
Route::get('/diary/{id}', [ApiDiaryController::class, 'show']); // 特定の1件取得
Route::post('/diary', [ApiDiaryController::class, 'store']);  // 新規作成
Route::patch('/diary/{id}', [ApiDiaryController::class, 'update']); // 更新
Route::delete('/diary/{id}', [ApiDiaryController::class, 'destroy']); // 削除
