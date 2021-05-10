<?php

use App\Http\Controllers\OneToOneController;
use Illuminate\Support\Facades\Route;

/* One To One */
Route::get('/onetoone', [OneToOneController::class, 'oneToOne']);
Route::get('/onetoone-inverse', [OneToOneController::class, 'oneToOneInverse']);
Route::get('/onetoone-insert', [OneToOneController::class, 'oneToOneInsert']);

Route::get('/', function () {
    return view('welcome');
});
