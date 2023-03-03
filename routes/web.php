<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\FacturesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Homepage
Route::get('/home', [HomeController::class, 'index']);

//clients
route::get('/clients',[ClientsController::class, 'index']);
route::get('/clients/create',[ClientsController::class, 'create']);
route::post('/clients/create',[ClientsController::class, 'store']);
route::get('clients/{client}',[ClientsController::class,'show']);
route::delete('/clients/delete/{client}',[ClientsController::class,'destroy']);
route::get('clients/edit/{client}',[ClientsController::class,'edit']);
route::patch('/clients/edit/{client}',[ClientsController::class,'update']);

//factures
route::get('/factures',[FacturesController::class,'index']);
Route::get('/factures/create',[FacturesController::class,'create']);
Route::post('/factures/create',[FacturesController::class,'store']);
route::get('factures/{facture}',[FacturesController::class,'show']);
route::delete('/factures/delete/{facture}',[FacturesController::class,'destroy']);
Route::get('/factures/edit/{facture}',[FacturesController::class,'edit']);
route::patch('/factures/edit/{facture}',[FacturesController::class,'update']);

