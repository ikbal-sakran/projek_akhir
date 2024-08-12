<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenController;
use App\Http\Controllers\TransaksiController;

Route::get('/get-event',[EvenController::class, 'getEvents']);
Route::get('/get-detail-event/{id}',[EvenController::class, 'getEvent']);
Route::post('/create-event',[EvenController::class, 'createEvent']);
Route::post('/update-event/{id}',[EvenController::class, 'updateEvent']);
Route::delete('/delete-event/{id}',[EvenController::class, 'deleteEvent']);

Route::post('/create-transaksi', [TransaksiController::class,'createTransaksi']);
Route::post('/update-transaksi/{id}', [TransaksiController::class,'updateTransaksi']);
Route::delete('/delete-transaksi/{id}', [TransaksiController::class,'deleteTransaksi']);
