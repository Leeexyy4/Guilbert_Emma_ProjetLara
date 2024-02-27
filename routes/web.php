<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Comment;
use App\Models\Article;
use Database\Factories\ArticleFactory;
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

Route::get('/', function () {
    // $comments = Comment::find(1)->comments();
    // dump($comments);

    // $articles = Article::factory()->make();
    // $articles = Article::factory()->count(10)->make();
    // dump($articles);

    // $comments = Comment::factory()->make();
    // $comments = Comment::factory()->count(10)->make();
    // dump($comments);

    // $article = Article::find(1)->comments();
    // $article::toArray();
    // dump($article);

    return view('welcome');
});

Route::get('/home', [Controller::class, 'afficherHome'])->name('home');
Route::get('/article', [ArticleController::class, 'afficherArticle'])->name('article');
Route::get('/comment', [CommentController::class, 'afficherComment'])->name('comment');
