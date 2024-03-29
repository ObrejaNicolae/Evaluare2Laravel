<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', PostController::class ,'index')->name('events.index');


Route::post('/events', PostController::class ,'store')->name('events.store');


Route::put('/events/{event}', PostController::class ,'update')->name('events.update');

Route::delete('/events/{event}', PostController::class ,'destroy')->name('events.destroy');