<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DNSController;
use App\Http\Controllers\PingController;
use App\Http\Controllers\TraceController;
use App\Http\Controllers\TracerouteController;


Route::get('/', function () {
    return view('welcome');
});

//Route for DNS resolving
Route::get('/dns', [DNSController::class, 'index']);
Route::post('/resolve', [DNSController::class, 'resolve'])->name('dns.dns');

// //Route for Ping Results
Route::get('/ping', [PingController::class, 'index']);
Route::post('/resolve1', [PingController::class, 'resolve1'])->name('ping.ping');

//Route for Tracert Results
Route::get('/tracert', [TraceController::class, 'index']);
Route::post('/resolve2', [TraceController::class, 'resolve2'])->name('tracert.trace');

//Route for TraceRoute Results
Route::get('/traceroute', [TracerouteController::class, 'index']);
Route::post('/resolve3', [TracerouteController::class, 'resolve3'])->name('traceroute.traceroute');