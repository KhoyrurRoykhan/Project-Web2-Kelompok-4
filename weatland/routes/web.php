<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuisController;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/home', Home::class,);
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);

Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');

Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/layout/flora', [FloraController::class, 'index'])->name('menu.flora');
Route::get('/layout/fauna', [FaunaController::class, 'index'])->name('menu.fauna');
Route::get('/layout/budaya', [BudayaController::class, 'index'])->name('menu.budaya');
Route::get('layout/quis', [QuisController::class, 'index'])->name('menu.quis');
