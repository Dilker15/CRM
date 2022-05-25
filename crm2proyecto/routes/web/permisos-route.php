<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Permiso\PermisoController;


Route::prefix('permiso')->name('permisos.')->middleware(['auth'])->group(function(){

    Route::get('/',[PermisoController::class,'index'])->name('index');

    Route::get('/edit/{permiso}',[PermisoController::class,'edit'])->name('edit');

    Route::get('/create',[PermisoController::class,'create'])->name('create');

    Route::get('/show/{permios}',[PermisoController::class,'show'])->name('show');
    
    Route::post('/store',[PermisoController::class,'store'])->name('store');

    Route::put('/update/{permiso}',[PermisoController::class,'update'])->name('update');

    Route::delete('/delete',[PermisoController::class,'destroy'])->name('destroy');

});