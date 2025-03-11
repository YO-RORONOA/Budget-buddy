<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;

// Routes publiques (non authentifiées)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Routes protégées (authentifiées)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    
    // Nous ajouterons les autres routes protégées ici plus tard
});