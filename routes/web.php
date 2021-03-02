<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfeController;
use App\Http\Controllers\PanelController;
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

Route::group(['middleware' => ['role:admin','auth:sanctum', 'verified']], function () {
    Route::get('/salas', function () {
        return view('salas');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/salas', function () {
    return view('salas');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/lobby', function () {
    return view('lobby.index');
});

Route::middleware(['role:admin','auth:sanctum', 'verified'])->get('/pabellon', function () {
    return view('pabellon.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/pabellon2', function () {
    return view('pabellon.option');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/detail', function () {
    return view('details.normal');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/detail2', function () {
    return view('details.live');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/conferencista',[ConfeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/crearconferencista',[ConfeController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->get('/crearpanelista',[PanelController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/panelista',[PanelController::class, 'create']);
