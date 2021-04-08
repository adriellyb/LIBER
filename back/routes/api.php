<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/** Rota para ser utilizada no Postman: http://localhost:8000/api/books 
 *                                      http://localhost:8000/api/users 
 *                                      http://localhost:8000/api/adds
 *                                      http://localhost:8000/api/comments
*/

/** Rotas para as funções criadas na BookController */
Route::get('books',[BookController::class, 'index']);

Route::get('books/{id}',[BookController::class, 'show']);

Route::post('books',[BookController::class, 'create']);

Route::put('books/{id}',[BookController::class, 'update']);

Route::delete('books/{id}',[BookController::class, 'destroy']);

/** Rotas para as funções criadas na UserController */
Route::get('users',[UserController::class, 'index']);

Route::get('users/{id}',[UserController::class, 'show']);

Route::post('users',[UserController::class, 'create']);

Route::put('users/{id}',[UserController::class, 'update']);

Route::delete('users/{id}',[UserController::class, 'destroy']);

/** Rotas para as funções criadas na AddressController */
Route::get('adds',[AddressController::class, 'index']);

Route::get('adds/{id}',[AddressController::class, 'show']);

Route::post('adds',[AddressController::class, 'create']);

Route::put('adds/{id}',[AddressController::class, 'update']);

Route::delete('adds/{id}',[AddressController::class, 'destroy']);

/** Rotas para as funções criadas na CommentController */
Route::get('comments',[CommentController::class, 'index']);

Route::get('comments/{id}',[CommentController::class, 'show']);

Route::post('comments',[CommentController::class, 'create']);

Route::put('comments/{id}',[CommentController::class, 'update']);

Route::delete('comments/{id}',[CommentController::class, 'destroy']);

//Comment from book posts
Route::get('commentsBook/{book_id}','CommentController@commentInPostBook');
