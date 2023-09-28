<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneWordsController;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', [OneWordsController::class, 'index']);
Route::post('/',[OneWordsController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit/{one_word_id}', [OneWordsController::class,'edit'])->name('edit');
Route::post('/edit/{one_word_id}', [OneWordsController::class,'update']);