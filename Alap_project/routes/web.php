<?php

use App\Http\Controllers\InagtlanController;
use App\Models\Ingatlanok;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
