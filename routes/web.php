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

Route::get('/', function () {
    return view('welcome');
});

//Colocando Ruta para llamar la logica de la app por medio de Controller.php
Route::get('prueba/{name}', 'PruebaController@prueba');

// trainers es una url, llamando el TrainerController en el CONTROLADOR
Route::resource('trainers', 'TrainerController');






//Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = 'apellido'){
//    return 'Hola soy '.$name. ' ' .$lastname;
//});


//Route::get('/mi_primera_ruta', function() {
//    return 'Hello World, esta es mi primera ruta :D.';
//});

