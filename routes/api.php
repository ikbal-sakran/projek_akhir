<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenController;


Route::get('/get-event',[EvenController::class, 'getEvents']);
Route::get('/get-detail-event/{id}',[EvenController::class, 'getEvent']);
Route::post('/create-event',[EvenController::class, 'createEvent']);
Route::post('/update-event/{id}',[EvenController::class, 'updateEvent']);
Route::delete('/delete-event/{id}',[EvenController::class, 'deleteEvent']);


