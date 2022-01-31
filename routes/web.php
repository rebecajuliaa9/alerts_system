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

Route::get('/', [AlertController::class, 'index']);
Route::get('/alerts/create', [AlertController::class, 'create']);
Route::get('/alerts/show', [AlertController::class, 'show']);
Route::post('/alerts', [AlertController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
