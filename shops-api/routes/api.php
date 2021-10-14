<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//public rout
Route::get('items', [ItemController::class, 'index']);
Route::get('items/{id}', [ItemController::class, 'show']);
Route::get('items/search/{name}', [ItemController::class, 'search']);

//private
Route::post('items', [ItemController::class, 'store']);
Route::put('items/{id}', [ItemController::class, 'update']);
Route::delete('items/{id}', [ItemController::class, 'destroy']);

//public rout
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);



//
Route::get('profiles', [ProfileController::class, 'index']);
Route::post('profiles', [ProfileController::class, 'store']);
Route::get('profiles/{id}', [ProfileController::class, 'show']);
Route::put('profiles/{id}', [ProfileController::class, 'update']);
Route::delete('profiles/{id}', [ItemController::class, 'destroy']);

//post
Route::get('posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'store']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::put('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);

Route::get('coments', [ComentController::class, 'index']);
Route::post('coments', [ComentController::class, 'store']);
Route::get('coments/{id}', [ComentController::class, 'show']);
Route::put('coments/{id}', [ComentController::class, 'update']);
Route::delete('coments/{id}', [ComentController::class, 'destroy']);
