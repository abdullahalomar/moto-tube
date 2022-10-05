<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'home']);
Route::get('submission', [PageController::class, 'submission']);
Route::get('service', [PageController::class, 'service']);
Route::get('send-video', [PageController::class, 'sendVideo']);
Route::get('thank-you', [PageController::class, 'thankYou']);