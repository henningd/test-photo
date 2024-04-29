<?php

use App\Http\Controllers\WebcamController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('webcam-capture',[WebcamController::class,'store'])->name('webcam.capture');
Route::get('/images', 'ImageController@index');

