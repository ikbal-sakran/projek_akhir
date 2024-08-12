<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\HutangPiutangController;

Route::get('/get-event',[EvenController::class, 'getEvents']);
Route::get('/get-detail-event/{id}',[EvenController::class, 'getEvent']);
Route::post('/create-event',[EvenController::class, 'createEvent']);
Route::post('/update-event/{id}',[EvenController::class, 'updateEvent']);
Route::delete('/delete-event/{id}',[EvenController::class, 'deleteEvent']);

Route::post('/create-transaksi', [TransaksiController::class,'createTransaksi']);
Route::post('/update-transaksi/{id}', [TransaksiController::class,'updateTransaksi']);
Route::delete('/delete-transaksi/{id}', [TransaksiController::class,'deleteTransaksi']);

Route::get('/get-hutang-piutang',[HutangPiutangController::class, 'getHutangPiutang']);
Route::get('/get-detail-hutang-piutang/{id}',[HutangPiutangController::class, 'getHutangPiutang']);
Route::post('/create-hutang-piutang',[HutangPiutangController::class, 'createHutangPiutang']);
Route::post('/update-hutang-piutang/{id}',[HutangPiutangController::class, 'updateHutangPiutang']);
Route::delete('/delete-hutang-piutang/{id}',[HutangPiutangController::class, 'deleteHutangPiutang']);
