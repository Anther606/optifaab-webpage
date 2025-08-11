<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home');
Route::view('/kontakt', 'kontakt.forma');
Route::view('/usluge', 'usluge.index');      // kreiraj po potrebi
Route::view('/cjenik', 'pricing.index');