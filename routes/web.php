<?php

use App\Http\Controllers\eventcontroller;
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


Route::get('/', [eventcontroller::class, 'index']);
Route::post('/store', [eventcontroller::class, 'store'])->name('store');
Route::get('/fetchall', [eventcontroller::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [eventcontroller::class, 'delete'])->name('delete');
Route::get('/edit', [eventcontroller::class, 'edit'])->name('edit');
Route::post('/update', [eventcontroller::class, 'update'])->name('update');

