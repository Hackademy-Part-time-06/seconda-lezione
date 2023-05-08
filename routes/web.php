<?php

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

Route::get('/', function () {

    return view('esercizio.index');
});

Route::get('/chi-siamo', function () {

    $persone = ['Alice', 'Pasquale', 'Giuseppe'];
    return view('esercizio.about', ['stampa' => $persone]);
});

Route::get('/contatti', function () {
    return view('esercizio.contact');
});
