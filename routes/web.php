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


Route::get('/address', 'AddressController@index')->name('address.index');
Route::get('/address/details/{id}', 'AddressController@details')->name('address.details');
Route::get('/address/add', 'AddressController@add')->name('address.add');
Route::post('/address/insert', 'AddressController@insert')->name('address.insert');
Route::get('/address/edit/{id}', 'AddressController@edit')->name('address.edit');
Route::post('/address/update/{id}', 'AddressController@update')->name('address.update');
Route::get('/address/delete/{id}', 'AddressController@delete')->name('address.delete');


Route::get('/takeAway', 'TakeAwayController@index')->name('takeaway.index');
Route::get('/takeAway/details/{id}', 'TakeAwayController@details')->name('takeaway.details');
Route::get('/takeAway/add', 'TakeAwayController@add')->name('takeaway.add');
Route::post('/takeAway/insert', 'TakeAwayController@insert')->name('takeaway.insert');
Route::get('/takeAway/edit/{id}', 'TakeAwayController@edit')->name('takeaway.edit');
Route::post('/takeAway/update/{id}', 'TakeAwayController@update')->name('takeaway.update');
Route::get('/takeAway/delete/{id}', 'TakeAwayController@delete')->name('takeaway.delete');