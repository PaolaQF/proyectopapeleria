<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosApiController;

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




Route::get('/empleados', [EmpleadosApiController::class, 'index']);
Route::get('/empleados/{id}', [EmpleadosApiController::class, 'show']);

Route::post('/empleados', [EmpleadosApiController::class, 'store']);
Route::put('/empleados/{id}', [EmpleadosApiController::class, 'update']);

Route::delete('/empleados/{id}', [EmpleadosApiController::class, 'destroy']);