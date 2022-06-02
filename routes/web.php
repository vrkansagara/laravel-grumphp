<?php

use App\Http\Controllers\PhpCsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('phpcs', PhpCsController::class)->only(['index']);
