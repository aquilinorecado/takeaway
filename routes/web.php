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

use App\TypeOfPayment;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/top', 'TypeOfPaymentController@index')->name('top.index');
Route::get('/top/details/{id}', 'TypeOfPaymentController@details')->name('top.details');
Route::get('/top/add', 'TypeOfPaymentController@add')->name('top.add');
Route::post('/top/insert', 'TypeOfPaymentController@insert')->name('top.insert');
Route::get('/top/edit/{id}', 'TypeOfPaymentController@edit')->name('top.edit');
Route::post('/top/update/{id}', 'TypeOfPaymentController@update')->name('top.update');
Route::get('/top/delete/{id}', 'TypeOfPaymentController@delete')->name('top.delete');