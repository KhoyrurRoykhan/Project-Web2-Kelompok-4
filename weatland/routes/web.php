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
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RumahAdatController;
use App\Http\Controllers\FaunaKalimantanController;
use App\Http\Middleware\isLogin;
use Maatwebsite\Excel\Facades\Excel;

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


Route::resource('/home', Home::class)->middleware('isLogin')->names([
    'index' => 'home.home',
]);


Route::get('/layout/flora', [FloraController::class, 'index'])->name('menu.flora')->middleware('isLogin');
Route::get('/layout/fauna', [FaunaController::class, 'index'])->name('menu.fauna')->middleware('isLogin');
Route::get('/layout/budaya', [BudayaController::class, 'index'])->name('menu.budaya')->middleware('isLogin');
Route::get('layout/quis', [QuisController::class, 'index'])->name('menu.quis')->middleware('isLogin');


// Budaya - Rumah Adat
Route::get('/budaya/rumahadat', [ArticleController::class, 'index'])->name('budaya.rumahadat')->middleware('isLogin');
Route::post('/budaya/rumahadat', [ArticleController::class, 'store'])->name('artikel.store')->middleware('isLogin');
Route::delete('/budaya/rumahadat/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy')->middleware('isLogin');
Route::put('/budaya/rumahadat/{id}', [ArticleController::class, 'update'])->name('artikel.update')->middleware('isLogin');
Route::get('/readmore/artikel/{id}', [ArticleController::class, 'readmore'])->name('readmore.artikel')->middleware('isLogin');

// Budaya - Pakaian
Route::get('/budaya/pakaian', [PakaianController::class, 'index'])->name('budaya.pakaian')->middleware('isLogin');
Route::post('/budaya/pakaian', [PakaianController::class, 'store'])->name('pakaian.store')->middleware('isLogin');
Route::delete('/budaya/pakaian/{id}', [PakaianController::class, 'destroy'])->name('pakaian.destroy')->middleware('isLogin');
Route::put('/budaya/pakaian/{id}', [PakaianController::class, 'update'])->name('pakaian.update')->middleware('isLogin');
Route::get('/readmore/pakaian/{id}', [PakaianController::class, 'readmore'])->name('readmore.pakaian')->middleware('isLogin');

// Budaya - Tari
Route::get('/tari', [TariController::class, 'index'])->name('budaya.tari')->middleware('isLogin');
Route::post('/tari', [TariController::class, 'store'])->name('tari.store')->middleware('isLogin');
Route::delete('/tari/{id}', [TariController::class, 'destroy'])->name('tari.destroy')->middleware('isLogin');
Route::put('/tari/{id}', [TariController::class, 'update'])->name('tari.update')->middleware('isLogin');
Route::get('/readmore/tari/{id}', [TariController::class, 'readmore'])->name('readmore.tari')->middleware('isLogin');

// Benda
Route::get('/budaya/benda', [BendaController::class, 'index'])->name('budaya.benda')->middleware('isLogin');
Route::post('/budaya/benda', [BendaController::class, 'store'])->name('benda.store')->middleware('isLogin');
Route::delete('/budaya/benda/{id}', [BendaController::class, 'destroy'])->name('benda.destroy')->middleware('isLogin');
Route::put('/benda/{id}', [BendaController::class, 'update'])->name('benda.update')->middleware('isLogin');
Route::get('/readmore/benda/{id}', [BendaController::class, 'readmore'])->name('readmore.benda')->middleware('isLogin');


//Fauna
Route::get('/fauna/faunakalimantan', [FaunaKalimantanController::class, 'index'])->name('fauna.faunakalimantan')->middleware('isLogin');
Route::post('/fauna/faunakalimantan', [FaunaKalimantanController::class, 'store'])->name('fauna.store')->middleware('isLogin');
Route::delete('/fauna/faunakalimantan/{id}', [FaunaKalimantanController::class, 'destroy'])->name('faunakalimantan.destroy')->middleware('isLogin');
Route::put('/faunakalimantan/{id}', [FaunaKalimantanController::class, 'update'])->name('fauna.update')->middleware('isLogin');
Route::get('/readmore/faunakalimantan/{id}', [FaunaKalimantanController::class, 'readmore'])->name('readmore.faunakalimantan')->middleware('isLogin');

//Fauna Voice
Route::get('/fauna/faunavoice', [FaunaVoiceController::class, 'index'])->name('fauna.faunavoice')->middleware('isLogin');
Route::post('/fauna/faunavoice', [FaunaVoiceController::class, 'store'])->name('faunavoice.store')->middleware('isLogin');
Route::delete('/fauna/faunavoice/{id}', [FaunaVoiceController::class, 'destroy'])->name('fauna.destroy')->middleware('isLogin');
Route::put('/faunavoice/{id}', [FaunaVoiceController::class, 'update'])->name('faunavoice.update')->middleware('isLogin');


// Flora
Route::get('/flora', [FloraController::class, 'index'])->name('flora.home')->middleware('isLogin');
Route::post('/flora/store', [FloraController::class, 'store'])->name('flora.store')->middleware('isLogin');
Route::delete('/flora/delete/{id}', [FloraController::class, 'destroy'])->name('flora.destroy')->middleware('isLogin');
Route::put('/flora/update/{id}', [FloraController::class, 'update'])->name('flora.update')->middleware('isLogin');
Route::get('/readmore/{id}', [FloraController::class, 'readmore'])->name('readmore.flora')->middleware('isLogin');



//Mulai Kuis
Route::get('/kuis/mulaikuis', [MulaiKuisController::class, 'index'])->name('kuis.mulaikuis')->middleware('isLogin');
Route::post('/kuis/mulaikuis', [MulaiKuisController::class, 'store'])->name('mulaikuis.store')->middleware('isLogin');
Route::delete('/mulaikuis/delete/{id}', [MulaiKuisController::class, 'destroy'])->name('mulaikuis.destroy')->middleware('isLogin');
Route::get('layout/quis', [QuisController::class, 'index'])->name('menu.quis')->middleware('isLogin');
Route::put('/mulaikuis/{id}', [MulaiKuisController::class, 'update'])->name('mulaikuis.update')->middleware('isLogin');

Route::get('/kuis/startkuis', [QuisController::class, 'startkuis'])->name('startkuis')->middleware('isLogin');
Route::post('/kuis/leaderboardinsert', [QuisController::class, 'store_leaderboard'])->name('store.leaderboard')->middleware('isLogin');

Route::get('/kuis/leaderboard', [QuisController::class, 'viewleaderboard'])->name('leaderboard')->middleware('isLogin');


// export
Route::get('leaderboard/pdf', [QuisController::class, 'exportPDF'])->name('export.pdf')->middleware('isLogin');

Route::get("leaderboard/excel", [ExcelController::class, 'export'])->name('export.excel')->middleware('isLogin');

// Login and registration routes

Route::get('/sesi', [SessionController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('login')->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('isTamu');
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi.index')->middleware('isTamu');
