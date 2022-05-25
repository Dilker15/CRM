<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Role\RoleController;


Route::prefix('roles')->name('roles.')->middleware(['auth'])->group(function(){

    Route::get('/',[RoleController::class,'index'])->name('index');

    Route::get('/edit/{rol}',[RoleController::class,'edit'])->name('edit');

    Route::get('/create',[RoleController::class,'create'])->name('create');

    Route::get('/show/{rol}',[RoleController::class,'show'])->name('show');
    
    Route::post('/store',[RoleController::class,'store'])->name('store');

    Route::put('/update/{rol}',[RoleController::class,'update'])->name('update');

    Route::delete('/delete',[RoleController::class,'destroy'])->name('destroy');

});