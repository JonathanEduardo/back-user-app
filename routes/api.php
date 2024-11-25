<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\AuthController;
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

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});




Route::get('/users', [UserController::class, 'index']);


// Rutas CRUD de usuarios
Route::get('/users', [UserController::class, 'index']); // Listar usuarios
Route::post('/users', [UserController::class, 'store']); // Crear un usuario
Route::get('/users/{id}', [UserController::class, 'show']); // Mostrar un usuario por ID
Route::put('/users/{id}', [UserController::class, 'update']); // Actualizar un usuario
Route::delete('/users/{id}', [UserController::class, 'destroy']); // Eliminar un usuario

