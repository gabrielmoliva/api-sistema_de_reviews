<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuario', [UsuarioController::class, 'index']);
Route::post('/usuario', [UsuarioController::class, 'store']);
Route::put('/usuario', [UsuarioController::class, 'update']);
Route::delete('/usuario', [UsuarioController::class, 'destroy']);

Route::get('/review', [ReviewController::class, 'index']);
Route::post('/review', [ReviewController::class, 'store']);
Route::put('/review', [ReviewController::class, 'update']);
Route::delete('/review', [ReviewController::class, 'destroy']);

Route::get('/comenta', [ComentaController::class, 'index']);
Route::post('/comenta', [ComentaController::class, 'store']);
Route::put('/comenta', [ComentaController::class, 'update']);
Route::delete('/comenta', [ComentaController::class, 'destroy']);