<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\Cliente\ClienteController;




Route::prefix('ventas')->name('ventas.')->middleware(['auth'])->group(function(){

    Route::get('/',[VentaController::class,'index'])->name('index');

    Route::get('/show/{venta}',[VentaController::class,'show'])->name('show');

    Route::get('/pdf',[VentaController::class,'pdf'])->name('pdf');
   



 
});








