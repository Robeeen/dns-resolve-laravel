<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DNSController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [DNSController::class, 'index']);
Route::post('/resolve', [DNSController::class, 'resolve']);