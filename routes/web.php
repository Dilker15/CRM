<?php

use App\Http\Controllers\Cliente1Controller;
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


//PRINCIPAL-LOGIN-REGISTER
/*Route::get('/',function(){
    return view('tienda.home');
})->name('tienda');*/


Route::get('/',[Cliente1Controller::class,'catalogo'])->name('tienda');
Route::get('registro',[Cliente1Controller::class,'index'])->name('registro');

Route::get('perfil',[Cliente1Controller::class,'perfil'])->name('perfil');

Route::get('/LoginAdmin', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//TIENDA
//PRINCIPAL

//PRINCIPAL-VARONES
Route::get('/hombres',function(){
    return view('hombres.home');
});
//PRINCIPAL-MUJERES
Route::get('/mujeres',function(){
    return view('mujeres.home');
});
