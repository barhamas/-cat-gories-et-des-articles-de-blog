<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('categorie')->name('categories.')->group(function () {
    Route::get('/', [CategorieController::class, 'index'])->name('index');
    Route::get('create', [CategorieController::class, 'create'])->name('create');
    Route::post('/', [CategorieController::class, 'store'])->name('store');
    Route::get('{category}', [CategorieController::class, 'show'])->name('show');
    Route::get('{category}/edit', [CategorieController::class, 'edit'])->name('edit');
    Route::put('{category}', [CategorieController::class, 'update'])->name('update');
    Route::delete('{category}', [CategorieController::class, 'destroy'])->name('destroy');
});

Route::prefix('article')->name('articles.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('create', [ArticleController::class, 'create'])->name('create');
    Route::post('/', [ArticleController::class, 'store'])->name('store');
    Route::get('{article}', [ArticleController::class, 'show'])->name('show');
    Route::get('{article}/edit', [ArticleController::class, 'edit'])->name('edit');
    Route::put('{article}', [ArticleController::class, 'update'])->name('update');
    Route::delete('{article}', [ArticleController::class, 'destroy'])->name('destroy');
});
