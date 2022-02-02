<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
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

Route::get('/', [AlertController::class, 'index'])->middleware('auth');
Route::get('/alerts/show', [AlertController::class, 'show'])->middleware('auth');
//
Route::middleware(['admin'])->group(function(){
    route::get('admin', function(){});
    Route::post('/alerts/store', [AlertController::class, 'store']);
    Route::get('/alerts/create', [AlertController::class, 'create']);
    //Route::get('/alerts/show', [AlertController::class, 'show'])->middleware('auth');
    Route::delete('/alerts/{id}', [AlertController::class, 'destroy']);
    Route::get('/alerts/edit/{id}', [AlertController::class, 'edit']);
    Route::put('/alerts/update/{id}', [AlertController::class, 'update']);
});

Route::middleware(['user'])->group(function(){
    //Route::get('/alerts/show', [AlertController::class, 'show'])->middleware('auth');

});