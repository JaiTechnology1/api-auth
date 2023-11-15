<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/personas",[PersonaController::class,"Listar"]);
Route::get("/personas/{d}",[PersonaController::class,"ListarUno"]);

Route::post("/personas",[PersonaController::class,"Insertar"]);

Route::put("/personas/{d}",[PersonaController::class,"Modificar"]);

Route::delete("/personas/{d}",[PersonaController::class,"Eliminar"]);
