<?php

use App\Http\Controllers\blogController;
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

Route::get('/', [blogController::class, 'select']);

Route::get('/create', function () {
    return view('create');
});

Route::post('/tambah', [blogController::class, 'insert']);
Route::get('/edit/{id}', [blogController::class, 'getId']);
Route::post('/update', [blogController::class, 'update']);
Route::get('/hapus/{id}', [blogController::class, 'delete']);