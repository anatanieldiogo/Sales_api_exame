<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\VendaController;
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

//Login de usuário
Route::post('/signin', [authController::class, 'signin'])->name('signin');

Route::group(['middleware' => 'auth:sanctum'], function () {

    //Obtem as vendas de acordo ao nivel de acesso
    Route::get('/sales', [VendaController::class, 'sales'])->name('sales');

    //Sistema de pesquisa
    Route::post('/search', [VendaController::class, 'search'])->name('search');

    //Registro das vendas
    Route::post('/store-sale', [VendaController::class, 'store'])->name('store-sale');

    //Terminar sessão
    Route::get('/signout', [authController::class, 'signout'])->name('signout');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
