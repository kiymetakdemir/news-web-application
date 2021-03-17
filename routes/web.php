<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/', 'articles');

Route::get('articles', 'App\Http\Controllers\ArticlesController@showArticles')->name('articlesroute');

Route::get('articles/{id}', 'App\Http\Controllers\ArticleController@openArticle')->name('articleroute');

Route::post('articles/{id}', 'App\Http\Controllers\ArticleController@createComment')->name('commentroute');