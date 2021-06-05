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


Route :: get('/',function (){
    return view ('acc');
});

Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/', 'AdminController@index'); /* le AdminConroller : c'est un fichier lli fih les differentes routes normalment 
                                                                le @index : c'est un apelle de la fonction index qui est 
                                                                definie dans le fichier AdminController */
    Route::name('admin')->get('/formulaire','AdminController@retform');
});

Route::prefix('user')->namespace('Back')->group(function () {
    Route::name('user')->get('/', 'UserController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

