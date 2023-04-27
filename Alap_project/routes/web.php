<?php

use App\Http\Controllers\InagtlanController;
use App\Models\Ingatlanok;
use Illuminate\Support\Facades\Route;


Route::get('/show', [InagtlanController::class, "index"]);
Route::get('/ingatlanoknevvel', [InagtlanController::class, "osszesIngatlanKatnev"]);
Route::post('/ingatlanfeltolt', [InagtlanController::class, "store"]);
Route::delete('/ingatlantorol', [InagtlanController::class, "destroy"]);

Route::get('/', function () {
    return view('ingatlan');
});
