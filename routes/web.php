<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::post('/posts', [PostController::class, 'store']);
//ブログ投稿作成実行

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
//ブログ投稿編集画面表示
Route::put('/posts/{post}', [PostController::class, 'update']);
//ブログ投稿編集実行

Route::delete('/posts/{post}', [PostController::class,'delete']);
//ブログ投稿削除実行

