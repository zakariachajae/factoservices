<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ForfaitController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tables/clients/clients','ClientsController');
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/tables/clients/clients',[ClientsController::class,'index'])->middleware(['auth']);
Route::get('/tables/clients/create',[ClientsController::class,'create'])->middleware(['auth']);
Route::post('/tables/clients/create',[ClientsController::class,'store'])->middleware(['auth']);
Route::get('/tables/clients/edit/{id}',[ClientsController::class,'edit'])->middleware(['auth']);
Route::post('/tables/clients/update/{id}',[ClientsController::class,'update'])->middleware(['auth']);
Route::get('/tables/clients/delete/{id}',[ClientsController::class,'delete'])->middleware(['auth']);
Route::post('/tables/clients/destroy/{id}',[ClientsController::class,'destroy'])->middleware(['auth']);

Route::get('/tables/contrats/contrats',[ContratController::class,'index'])->middleware(['auth']);
Route::get('/tables/contrats/delete/{id}',[ClientsController::class,'delete'])->middleware(['auth']);
Route::post('/tables/contrats/destroy/{id}',[ClientsController::class,'destroy'])->middleware(['auth']);


Route::get('/tables/factures/factures',[FactureController::class,'index'])->middleware(['auth']);

Route::get('/tables/forfaits/forfaits',[ForfaitController::class,'index'])->middleware(['auth']);
Route::get('/tables/forfaits/create',[ForfaitController::class,'create'])->middleware(['auth']);
Route::post('/tables/forfaits/create',[ForfaitController::class,'store'])->middleware(['auth']);
Route::get('/tables/forfaits/edit/{id}',[ForfaitController::class,'edit'])->middleware(['auth']);
Route::post('/tables/forfaits/update/{id}',[ForfaitController::class,'update'])->middleware(['auth']);

Route::get('/tables/paiements/paiements',[PaiementController::class,'index'])->middleware(['auth']);





require __DIR__.'/auth.php';