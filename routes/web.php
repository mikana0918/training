<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect("/", "article");
Route::resource('article', ArticleController::class);

// 認証ルート
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ログイン必要な画面のルート定義
Route::middleware(['auth'])->group(function() {
  // TODO: DashboardControllerを作成
  // TODO: ここに投稿フォームを移動する
  Route::get('/dashboard', [DashboardController::class, 'index'])->name("admin.index");
});
