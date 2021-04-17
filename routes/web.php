<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BaseController;


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

Route::get('/', [UserController::class, 'index'])->middleware('RouteMiddleware');
Route::get('/login', [BaseController::class, 'index']);
Route::post('/login', [BaseController::class, 'verifyLogin']);

Route::group(['middleware' => ['GroupMiddleware']], function () {
  Route::get('/new', [UserController::class, 'create']);
  Route::post('/new', [UserController::class, 'store']);
  Route::post('/update', [UserController::class, 'update']);
  Route::get('/show/{id}', [UserController::class, 'show']);
  Route::get('/edit/{id}', [UserController::class, 'edit']);
  Route::get('/delete/{id}', [UserController::class, 'destroy']);
});
