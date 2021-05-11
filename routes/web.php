<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;

/* One To One */
Route::get('/onetoone', [OneToOneController::class, 'oneToOne']);
Route::get('/onetoone-inverse', [OneToOneController::class, 'oneToOneInverse']);
Route::get('/onetoone-insert', [OneToOneController::class, 'oneToOneInsert']);

/* One To Many */
Route::get('/one-to-many', [OneToManyController::class, 'oneToMany']);
Route::get('/many-to-one', [OneToManyController::class, 'manyToOne']);
Route::get('/one-to-man-two', [OneToManyController::class, 'oneToManyTwo']);

Route::get('/', function () {
    return view('welcome');
});
