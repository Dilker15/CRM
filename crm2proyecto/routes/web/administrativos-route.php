<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrativo\AdministrativoController;




Route::prefix('administrativos')->name('administrativos.')->middleware(['auth'])->group(function(){

    Route::get('/',[AdministrativoController::class,'index'])->name('index');

    Route::get('/edit/{administrativo}',[AdministrativoController::class,'edit'])->name('edit');

    Route::get('/show/{administrativo}',[AdministrativoController::class,'show'])->name('show');

    Route::get('/create',[AdministrativoController::class,'create'])->name('create');

    Route::post('/store',[AdministrativoController::class,'store'])->name('store');

    Route::put('/update{administrativo}',[AdministrativoController::class,'update'])->name('update');

    Route::delete('/delete',[AdministrativoController::class,'destroy'])->name('destroy');



});








