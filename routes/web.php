<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleControllerOwner;
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
Route::get('/', 'App\Http\Controllers\ArticleController@index');


// 認証ルート。グループ化してリソースコントローラーに認証機能をつけた。
// /articleとリンク先を指定するとmiddleware発動しlogin画面に遷移。
Auth::routes();
Route::group(['middleware'=> 'auth'],function(){
    Route::resource('article', ArticleControllerOwner::class);
});
