<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoscaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\OrdenProduccionController;
use App\Http\Controllers\Controller;
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


Route::get('/', [Controller::class, 'api']);

Route::get('/post/{slug}', [PostController::class, 'show']);

Route::get('/rosca/{slug}', [RoscaController::class, 'show']);

Route::get('/cliente', [ClienteController::class, 'show']);

Route::get('/ordenProduccion', [OrdenProduccionController::class, 'show']);

Route::post('/ordenProduccion', [OrdenProduccionController::class, 'store']);

