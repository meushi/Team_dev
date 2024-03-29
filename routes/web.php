<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\FolderController;

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

Route::get('/', [FolderController::class, 'index']);
Route::get('/folder/create', [FolderController::class, 'create']);
Route::post('/folders',[FolderController::class, 'store']);
Route::get('/folder/{folder}',[PostController::class,'index']);
Route::post('/posts/{folder}',  [PostController::class, 'store']);
Route::get('/folders/create',  [FolderController::class, 'create']);
Route::get('/posts/create/{folder}',  [PostController::class, 'create']);
Route::get('/posts/{post}',  [PostController::class, 'show']);
Route::put('/posts/{post}',  [PostController::class, 'update']);
Route::delete('/posts/{post}',  [PostController::class, 'delete']);
Route::get('/posts/{post}/edit',  [PostController::class, 'edit']);
Route::get('/categories/{category}', [CategoryController::class,'index']);
