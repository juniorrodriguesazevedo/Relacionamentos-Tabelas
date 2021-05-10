<?php

use App\Http\Controllers\OneToOneController;
use Illuminate\Support\Facades\Route;

/* One To One */
Route::get('/onetoone', [OneToOneController::class, 'oneToOne']);

Route::get('/', function () {
    return view('welcome');
});
