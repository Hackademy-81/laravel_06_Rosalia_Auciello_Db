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
Route::get('/form/articles', [ArticleController::class, 'showForm'])->name('pageFormArticle'); 
Route::post('/articles/add', [ArticleController::class, 'addArticle'])->name('articleCreated'); 
