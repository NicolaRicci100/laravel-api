<?php

use App\Http\Controllers\Api\PostController;
use App\Models\Post;
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

// rotta api per avere la lista dei post
Route::get('/posts', [PostController::class, 'index']);

// rotta api per avere il dettaglio dei post
Route::get('/posts/{post}', [PostController::class, 'show']);
