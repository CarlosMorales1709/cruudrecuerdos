<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::view('/','welcome');
Route::view('HOME','home')->name('1');
Route::view('REGISTRAR','registrar')->name('2');
Route::view('RECUERDO','recuerdo')->name('3');
*/

/*
route::controller(controladorVistas::class)->group
    (function (){
        Route::get('/','showWelcome');
        Route::get('HOME','showHome')->name('1');
        Route::get('REGISTRAR', 'showIngresar')->name('2');
        Route::get('RECUERDO','showRecuerdos')->name('3');
    }
    
);
*/

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;

//CREATE
Route::get('recuerdo/create', [controladorBD::class,'create'])->name('recuerdo.create');

//store
Route::post('recuerdo', [controladorBD::class,'store'])->name('recuerdo.store');

//index
Route::get('recuerdo', [controladorBD::class,'index'])->name('recuerdo.index');

//edit
Route::get('recuerdo/{id}/edit', [controladorBD::class,'edit'])->name('recuerdo.edit');

//update
Route::put('recuerdo/{id}', [controladorBD::class,'update'])->name('recuerdo.update');

//Show/eliminar
Route::get('recuerdo/{id}/show', [controladorBD::class,'show'])->name('recuerdo.show');

//destroy/eliminar
Route::delete('recuerdo/{id}', [controladorBD::class,'destroy'])->name('recuerdo.destroy');



Route::get('/', [controladorVistas::class,'showWelcome']);
Route::get('HOME', [controladorVistas::class,'showHome'])->name('1');



//Rutas para envio post
//Route::post('GUARDARREC', [controladorVistas::class,'procesarRecuerdo'])->name('guardar');







