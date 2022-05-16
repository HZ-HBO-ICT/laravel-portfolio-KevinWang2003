<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\GradesController;

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

Route::get('/', [ViewController::class, 'show']);
Route::get('/posts/{slug}', [PostsController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/portfolio', [PortfolioController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

// Shows all stored articles
Route::get('/articles/index', [ArticlesController::class, function () {
    return view('articles.index', [
        'articles' => App\Models\Article::all()
    ]);
}])->name('articles.index');
// Stores newly added data
Route::post('/articles', [ArticlesController::class, 'store']);
// Shows creation page
Route::get('/articles/create', [ArticlesController::class, 'create']);
// Shows a specific article
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
// Shows edit page of specific article
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
// Updates stored data
Route::put('/articles/{article}', [ArticlesController::class, 'update']);
// Deletes a specific article
Route::delete('/articles/{article}', [ArticlesController::class, 'destroy']);

// Shows Index
Route::resource('/faqs', FaqsController::class);

// Shows Index
Route::get('/grades/index', [GradesController::class, function () {
    return view('grades.index', [
        'grades' => App\Models\Grade::all()
    ]);
}])->name('grades.index');
// Stores new data
Route::post('/grades', [GradesController::class, 'store']);
// Shows creation page
Route::get('/grades/create', [GradesController::class, 'create'])->name('grades.create');
// Show edit page
Route::get('/grades/{grade}/edit', [GradesController::class, 'edit'])->name('grades.edit');
// Updates stored data
Route::put('/grades/{grade}', [GradesController::class, 'update']);
// Deletes specific data
Route::delete('/grades/{grade}', [GradesController::class, 'destroy']);
