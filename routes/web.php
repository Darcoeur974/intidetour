<?php

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

/**
 * Admin
 */

use App\Http\Controllers\CircuitsController;

/**
 * Accueil
 */
Route::resource('/', 'AccueilController');

/**
 * CGU
 */
Route::get('/cgu', function () {
    return view('clients.cgu');
});

/**
 * À propos
 */
Route::get('/apropos', 'AboutController@index');

/**
 * Acceuil
 */
Route::prefix('/contact')->group (function() {
    Route::get('/', 'ContactController@index');
    Route::post('/', 'ContactController@store');
});

Route::get('/galerie', function () {
    return view('clients.galerie.pageGalerie');
});

/**
 * Circuits
 */
Route::prefix('/circuits')->group(function () {

    Route::get('/', function () {
        $ctrl = new CircuitsController();
        $circuits = $ctrl->index();
        return view('clients.views.circuits', ['circuits' => $circuits]);
    });

    Route::get('/{id}', function ($id) {
        //recupere un circuit en fonction de son id
        $ctrl = new CircuitsController();
        $circuit = $ctrl->show($id);
        return view('clients.views.circuit',['circuit' => $circuit]);
    
    })->where('id', "[0-9]+");

});

/**
 * laisser en bas
 */

Route::prefix('/dashboard')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/{any}', 'AdminController@index')->where('any', '.*');
});
