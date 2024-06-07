<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DNSController;
use App\Http\Controllers\PingController;

Route::get('/', function () {
    return view('welcome');
});

//Route for DNS resolving
Route::get('/dns', [DNSController::class, 'index']);
Route::post('/resolve', [DNSController::class, 'resolve']);

//Route for Ping Results
Route::get('/ping', [PingController::class, 'index']);
Route::post('/resolve', [PingController::class, 'resolve'])->name('ping.ping');