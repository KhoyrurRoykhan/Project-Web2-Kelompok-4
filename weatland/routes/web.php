<?php

use App\Http\Controllers\FaunaVoiceController;
use App\Http\Controllers\MulaiKuisController;
use App\Models\Article;
use App\Http\Controllers\Home;
use App\Models\FaunaVoice;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuisController;
use App\Http\Controllers\TariController;
use App\Http\Controllers\BendaController;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RumahAdatController;
use App\Http\Controllers\FaunaKalimantanController;

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
Route::get('layout/quis', [QuisController::class, 'index'])->name('menu.quis');


// Budaya - Rumah Adat
Route::get('/budaya/rumahadat', [ArticleController::class, 'index'])->name('budaya.rumahadat');
Route::post('/budaya/rumahadat', [ArticleController::class, 'store'])->name('artikel.store');
Route::delete('/budaya/rumahadat/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy');
Route::put('/budaya/rumahadat/{id}', [ArticleController::class, 'update'])->name('artikel.update');
Route::get('/readmore/artikel/{id}', [ArticleController::class, 'readmore'])->name('readmore.artikel');

// Budaya - Pakaian
Route::get('/budaya/pakaian', [PakaianController::class, 'index'])->name('budaya.pakaian');
Route::post('/budaya/pakaian', [PakaianController::class, 'store'])->name('pakaian.store');
Route::delete('/budaya/pakaian/{id}', [PakaianController::class, 'destroy'])->name('pakaian.destroy');
Route::put('/budaya/pakaian/{id}', [PakaianController::class, 'update'])->name('pakaian.update');
Route::get('/readmore/pakaian/{id}', [PakaianController::class, 'readmore'])->name('readmore.pakaian');

// Budaya - Tari
Route::get('/tari', [TariController::class, 'index'])->name('budaya.tari');
Route::post('/tari', [TariController::class, 'store'])->name('tari.store');
Route::delete('/tari/{id}', [TariController::class, 'destroy'])->name('tari.destroy');
Route::put('/tari/{id}', [TariController::class, 'update'])->name('tari.update');
Route::get('/readmore/tari/{id}', [TariController::class, 'readmore'])->name('readmore.tari');

// Benda
Route::get('/budaya/benda', [BendaController::class, 'index'])->name('budaya.benda');
Route::post('/budaya/benda', [BendaController::class, 'store'])->name('benda.store');
Route::delete('/budaya/benda/{id}', [BendaController::class, 'destroy'])->name('benda.destroy');
Route::put('/benda/{id}', [BendaController::class, 'update'])->name('benda.update');
Route::get('/readmore/{id}', [BendaController::class, 'readmore'])->name('readmore.benda');


//Fauna
Route::get('/fauna/faunakalimantan', [FaunaKalimantanController::class, 'index'])->name('fauna.faunakalimantan');
Route::post('/fauna/faunakalimantan', [FaunaKalimantanController::class, 'store'])->name('fauna.store');
Route::delete('/fauna/faunakalimantan/{id}', [FaunaKalimantanController::class, 'destroy'])->name('fauna.destroy');
Route::put('/faunakalimantan/{id}', [FaunaKalimantanController::class, 'update'])->name('fauna.update');

//Fauna Voice
Route::get('/fauna/faunavoice', [FaunaVoiceController::class, 'index'])->name('fauna.faunavoice');
Route::post('/fauna/faunavoice', [FaunaVoiceController::class, 'store'])->name('faunavoice.store');
Route::delete('/fauna/faunavoice/{id}', [FaunaVoiceController::class, 'destroy'])->name('fauna.destroy');
Route::put('/faunavoice/{id}', [FaunaVoiceController::class, 'update'])->name('faunavoice.update');

//Mulai Kuis
Route::get('/kuis/mulaikuis', [MulaiKuisController::class, 'index'])->name('kuis.mulaikuis');
Route::post('/kuis/mulaikuis', [MulaiKuisController::class, 'store'])->name('mulaikuis.store');
Route::get('layout/quis', [QuisController::class, 'index'])->name('menu.quis');
Route::put('/mulaikuis/{id}', [MulaiKuisController::class, 'update'])->name('mulaikuis.update');



