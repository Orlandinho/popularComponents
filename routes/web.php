<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/confirmation', function () {
    return view('confirmationDialog');
});

Route::post('confirm-button', function () {
    return 'form submitted';
});

Route::post('/user', [UserController::class, 'store']);
