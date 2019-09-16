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

Route::get('/', function () {
        $plots = \DB::select('SELECT * FROM plots');
        return view('welcome', ['plots'=>$plots]);
})->name('home');

Route::resource('plots', 'plotsController');
Route::resource('admin', 'adminController');

