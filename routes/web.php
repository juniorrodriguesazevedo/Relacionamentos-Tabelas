<?php

use App\Http\Controllers\HasManyThroughController;
use App\Http\Controllers\ManyToManyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\PolymorphicController;

/* One To One */
Route::get('/onetoone', [OneToOneController::class, 'oneToOne']);
Route::get('/onetoone-inverse', [OneToOneController::class, 'oneToOneInverse']);
Route::get('/onetoone-insert', [OneToOneController::class, 'oneToOneInsert']);

/* One To Many */
Route::get('/one-to-many', [OneToManyController::class, 'oneToMany']);
Route::get('/many-to-one', [OneToManyController::class, 'manyToOne']);
Route::get('/one-to-man-two', [OneToManyController::class, 'oneToManyTwo']);
Route::get('/one-to-man-insert', [OneToManyController::class, 'oneToManyInsert']);
Route::get('/one-to-man-insert-Two', [OneToManyController::class, 'oneToManyInsertTwo']);

/* Has Many Through */
Route::get('/has-many-through', [HasManyThroughController::class, 'hasManyThrough']);

/* Many To Many */
Route::get('/many-to-many', [ManyToManyController::class, 'manyToMany']);
Route::get('/many-to-many-inverse', [ManyToManyController::class, 'manyToManyInverse']);
Route::get('/many-to-many-insert', [ManyToManyController::class, 'manyToManyInsert']);

/* Relation Polymorphic */
Route::get('/polymorphic', [PolymorphicController::class, 'polymorphic']);
Route::get('/polymorphic-insert', [PolymorphicController::class, 'polymorphicInsert']);

Route::get('/', function () {
    return view('welcome');
});
