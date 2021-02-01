<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PeripheralController@index') -> name('peripheral-index');   //visualizzo tutte le peripherals

Route::get('/peripheral{id}', 'PeripheralController@show') -> name('peripheral-show');  //visualizzo la singola peripheral

Route::get('/new/peripheral', 'PeripheralController@create') -> name('peripheral-create');  //visualizzo la pagina col form

Route::post('/new/peripheral/store', 'PeripheralController@store') -> name('peripheral-store');    //acquisisco le informazioni del form
