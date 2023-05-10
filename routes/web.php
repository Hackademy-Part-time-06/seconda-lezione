<?php

use App\Http\Controllers\PageController;
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
//Homepage
//Chi Siamo
//Contatti

//1) Prima di tutto fare 3 rotte
//2) Dopo fare 3 viste, view o strutture blade
//3) Verificare sul browser 



Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
Route::get('/singolo-mese/{ref}', [PageController::class, 'dettaglio'])->name('detail');
Route::get('/contatti', [PageController::class, 'contatti'])->name('contact');
