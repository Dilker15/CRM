<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente\ClienteController;



Route::prefix('clientes')->name('clientes.')->middleware(['auth'])->group(function(){

    Route::get('/',[ClienteController::class,'index'])->name('index');

    Route::get('/edit/{cliente}',[ClienteController::class,'edit'])->name('edit');

    Route::get('/create',[ClienteController::class,'create'])->name('create');

    Route::get('/show/{cliente}',[ClienteController::class,'show'])->name('show');

    Route::put('/update/{cliente}',[ClienteController::class,'update'])->name('update');

    Route::post('/store',[ClienteController::class,'store'])->name('store');

    Route::delete('/delete',[ClienteController::class,'destroy'])->name('destroy');

});

