<?php

use App\Http\Controllers\WebcamController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('webcam-capture',[WebcamController::class,'store'])->name('webcam.capture');
Route::get('/images', 'ImageController@index');

