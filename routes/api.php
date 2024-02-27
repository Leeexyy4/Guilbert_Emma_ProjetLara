<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Routes articles
Route::get("articles",[ArticleController::class,'index']);
Route::get("/articles/{id}",[ArticleController::class,'show']);
Route::post("/articles",[ArticleController::class,'store']);
Route::patch("/articles/{id}",[ArticleController::class,'update']);
Route::delete("/articles/{id}",[ArticleController::class,'destroy']);
Route::get("/articles/search/{id}",[ArticleController::class,'search']);


// Routes comments
Route::get("/comments",[CommentController::class,'index']);
Route::get("/comments/{id}",[CommentController::class,'show']);
Route::post("/comments",[CommentController::class,'store']);
Route::patch("/comments/{id}",[CommentController::class,'update']);
Route::delete("/comments/{id}",[CommentController::class,'destroy']);
Route::get("/comments/search/{id}",[CommentController::class,'search']);
