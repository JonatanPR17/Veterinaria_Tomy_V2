<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class)->name('home');

/*Route::controller(PersonaController::class)->group(function () {
    Route::get('personas', 'index')->name('personas.index');
    Route::get('personas/create', 'create')->name('personas.create');
    Route::post('personas','store')->name('personas.store');
    Route::get('personas/{persona}','show')->name('personas.show');
    Route::get('personas/{persona}/edit','edit')->name('personas.edit');
    Route::put('personas/{persona}','update')->name('personas.update');
    Route::delete('personas,{persona}','destroy')->name('personas.destroy'); 
});*/

Route::resource('personas',PersonaController::class) /*->parameters(['clientes' => 'persona'])->names('personas')*/;

Route::view('nosotros','nosotros')->name('nosotros');