<?php

use App\Http\Controllers\ItemController;
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

Route::get('/', [ItemController::class, 'index'])->name('home');
Route::get('/edit-item/{id}', [ItemController::class, 'edit'])->name('edit-item');
Route::get('/delete-item/{id}', [ItemController::class, 'delete'])->name('delete-item');

Route::post('/add-item', [ItemController::class, 'store'])->name('add-item');
Route::put('/update-item/{id}', [ItemController::class, 'update'])->name('update-item');
Route::delete('/destroy-item/{id}', [ItemController::class, 'destroy'])->name('destroy-item');
