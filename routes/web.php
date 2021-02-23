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

Route::get('/', function () {
    return view('welcome');
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
Route::middleware(['auth:sanctum', 'verified'])->get('/pabellon', function () {
    return view('pabellon.index');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/detail', function () {
    return view('details.normal');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/conferencista',[ConfeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/crearconferencista',[ConfeController::class, 'create']);



Route::middleware(['auth:sanctum', 'verified'])->get('/crearpanelista',[PanelController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/panelista',[PanelController::class, 'create']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
