<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleControllerShow;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

// 見るだけのルーティング
Route::get('/', 'App\Http\Controllers\ArticleControllerShow@index');


// 認証ルート。グループ化してリソースコントローラーに認証機能をつけた。
// Routeの部分で/dashboardとリンク先を指定するとmiddleware発動しlogin画面に遷移。login後のリダイレクト先は
Auth::routes();
Route::group(['middleware'=> 'auth'],function(){
    Route::resource('dashboard', ArticleController::class);
});
