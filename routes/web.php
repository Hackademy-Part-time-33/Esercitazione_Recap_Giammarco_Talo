<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/homepage', [PageController::class, 'homepage']);

Route::post('/send', [ContactController::class, 'send'])->name('send');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');