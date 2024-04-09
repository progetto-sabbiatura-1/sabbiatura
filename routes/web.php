<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class , 'home'])->name('home');
Route::post('/submit' , [PublicController::class , 'submit'])->name('submit');
Route::get('/contatti' , [PublicController::class , 'contatti'])->name('contatti');
Route::get('/galleria' , [PublicController::class , 'galleria'])->name('galleria');
