<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/catalogo', [PageController::class, 'list'])->name('list');
Route::get('/catalogo/{id}', [PageController::class, 'show'])->name('show');
Route::get('/grazie', [PageController::class, 'thank'])->name('thank');

Route::post('/invio/dati', [PageController::class, 'store'])->name('store');
