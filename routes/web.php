<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;
use App\Http\Controllers\Admin\ComicController;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/comics', [PageController::class, 'comics'])->name('comics');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/show/{comic}', [PageController::class, 'show'])->name('show');

Route::get('/admin/comics/trash', [ComicController::class, 'trashed'])->name('trash');
Route::post('/admin/comics/trash/{comic}', [ComicController::class, 'restore'])->name('restoreTrash');
Route::delete('/admin/comics/trash/{comic}', [ComicController::class, 'forceDestroy'])->name('deleteTrash');
Route::resource('admin/comics', ComicController::class);
