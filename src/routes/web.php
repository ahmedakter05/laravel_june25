<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

