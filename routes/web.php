<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('services/index', [ServiceController::class, 'list'])->name('backend.services')->middleware('auth');
Route::get('services/create', [ServiceController::class, 'create'])->name('services.create')->middleware('auth');
Route::post('services/store', [ServiceController::class, 'store'])->name('services.store')->middleware('auth');
Route::get('/about', AboutController::class);
Route::get('/contact', ContactController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
