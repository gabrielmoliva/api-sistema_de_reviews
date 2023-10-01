<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ComentaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuario', [UsuarioController::class, 'index']);
Route::post('/usuario', [UsuarioController::class, 'store']);
Route::get('/usuario/{usuario}', [UsuarioController::class, 'show']);
Route::put('/usuario/{usuario}', [UsuarioController::class, 'update']);
Route::delete('/usuario/{usuario}', [UsuarioController::class, 'destroy']);

Route::get('/review', [ReviewController::class, 'index']);
Route::post('/review', [ReviewController::class, 'store']);
Route::get('/review/{review}', [ReviewController::class, 'show']);
Route::put('/review/{review}', [ReviewController::class, 'update']);
Route::delete('/review/{review}', [ReviewController::class, 'destroy']);

Route::get('/comenta', [ComentaController::class, 'index']);
Route::post('/comenta', [ComentaController::class, 'store']);
Route::get('/comenta/{comenta}', [ComentaController::class, 'show']);
Route::put('/comenta/{comenta}', [ComentaController::class, 'update']);
Route::delete('/comenta/{comenta}', [ComentaController::class, 'destroy']);