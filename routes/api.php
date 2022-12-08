<?php

use App\Http\Controllers\VerifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/verify', [VerifyController::class, 'index']);
