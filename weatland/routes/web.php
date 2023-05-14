<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BendaController;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuisController;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\RumahAdatController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TariController;
use App\Models\Article;

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
// Login
Route::resource('/home', Home::class,);
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);


Route::get('/layout/flora', [FloraController::class, 'index'])->name('menu.flora');
Route::get('/layout/fauna', [FaunaController::class, 'index'])->name('menu.fauna');
Route::get('/layout/budaya', [BudayaController::class, 'index'])->name('menu.budaya');


// Budaya
Route::get('/budaya/rumahadat', [ArticleController::class, 'index'])->name('budaya.rumahadat');
Route::post('/budaya/rumahadat', [ArticleController::class, 'store'])->name('artikel.store');
Route::delete('/budaya/rumahadat/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy');
Route::put('/article/{id}', [ArticleController::class, 'update'])->name('artikel.update');



// Pakaian
Route::get('/budaya/pakaian', [PakaianController::class, 'index'])->name('budaya.pakaian');
Route::post('/budaya/pakaian', [PakaianController::class, 'store'])->name('pakaian.store');
Route::delete('/budaya/pakaian/{id}', [PakaianController::class, 'destroy'])->name('pakaian.destroy');
Route::put('/pakaian/{id}', [PakaianController::class, 'update'])->name('pakaian.update');

// Tari
Route::get('/budaya/tari', [TariController::class, 'index'])->name('budaya.tari');
Route::post('/budaya/tari', [TariController::class, 'store'])->name('tari.store');
Route::delete('/budaya/tari/{id}', [TariController::class, 'destroy'])->name('tari.destroy');
Route::put('/tari/{id}', [TariController::class, 'update'])->name('tari.update');

// Benda
Route::get('/budaya/benda', [BendaController::class, 'index'])->name('budaya.benda');
Route::post('/budaya/benda', [BendaController::class, 'store'])->name('benda.store');
Route::delete('/budaya/benda/{id}', [BendaController::class, 'destroy'])->name('benda.destroy');
Route::put('/benda/{id}', [BendaController::class, 'update'])->name('benda.update');


Route::get('layout/quis', [QuisController::class, 'index'])->name('menu.quis');
