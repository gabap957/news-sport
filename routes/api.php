<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GetPostbyIdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/search',[HomeController::class,'search'])->name('search');
Route::get('/reply',[GetPostbyIdController::class,'reply'])->name('reply');
Route::get('/chartYear',[DashboardController::class,'chartYear'])->name('chartYear');
Route::get('/chartMonth',[DashboardController::class,'chartMonth'])->name('chartMonth');
Route::get('/chartCategory',[DashboardController::class,'chartCategory'])->name('chartCategory');




