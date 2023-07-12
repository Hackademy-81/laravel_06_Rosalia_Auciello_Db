<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'welcome'])->name('homePage');
// rotta articoli inseriti dall'utente
Route::get('user/article', [ArticleController::class, 'user'])->name('article.user');

Route::get('/form/articles', [ArticleController::class, 'showForm'])->name('pageFormArticle'); 
Route::post('/articles/add', [ArticleController::class, 'addArticle'])->name('articleCreated');
// dettaglio 
Route::get('article/detail/{idArticle}', [ArticleController::class, 'showDetail'])->name('pageDetail'); 
// modifica
Route::get('article/update/{article}', [ArticleController::class, 'update'])->name('article.update'); 
Route::put('article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit'); 
// elimina
Route::delete('article/delete/{article}', [ArticleController::class, 'delete'])->name('article.delete'); 
