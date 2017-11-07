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
use App\products;


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


Route::get('/takeaway', 'TakeAwayController@index')->name('takeaway.index');
Route::get('/takeaway/details/{id}', 'TakeAwayController@details')->name('takeaway.details');
Route::get('/takeaway/add', 'TakeAwayController@add')->name('takeaway.add');
Route::post('/takeaway/insert', 'TakeAwayController@insert')->name('takeaway.insert');
Route::get('/takeaway/edit/{id}', 'TakeAwayController@edit')->name('takeaway.edit');
Route::post('/takeaway/update/{id}', 'TakeAwayController@update')->name('takeaway.update');
Route::get('/takeaway/delete/{id}', 'TakeAwayController@delete')->name('takeaway.delete');

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
Route::get('/user/add', 'UserController@add')->name('user.add');
Route::post('/user/insert', 'UserController@insert')->name('user.insert');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');

Route::get('/userlevel', 'UserLevelController@index')->name('userlevel.index');
Route::get('/userlevel/details/{id}', 'UserLevelController@details')->name('userlevel.details');
Route::get('/userlevel/add', 'UserLevelController@add')->name('userlevel.add');
Route::post('/userlevel/insert', 'UserLevelController@insert')->name('userlevel.insert');
Route::get('/userlevel/edit/{id}', 'UserLevelController@edit')->name('userlevel.edit');
Route::post('/userlevel/update/{id}', 'UserLevelController@update')->name('userlevel.update');
Route::get('/userlevel/delete/{id}', 'UserLevelController@delete')->name('userlevel.delete');


Route::get('/categorie', 'CategorieController@index')->name('categorie.index');
Route::get('/categorie/details/{id}', 'CategorieController@details')->name('categorie.details');
Route::get('/categorie/add', 'CategorieController@add')->name('categorie.add');
Route::post('/categorie/insert', 'CategorieController@insert')->name('categorie.insert');
Route::get('/categorie/edit/{id}', 'CategorieController@edit')->name('categorie.edit');
Route::post('/categorie/update/{id}', 'CategorieController@update')->name('categorie.update');
Route::get('/categorie/delete/{id}', 'CategorieController@delete')->name('categorie.delete');



Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/details/{id}', 'ProductController@details')->name('product.details');
Route::get('/product/add', 'ProductController@add')->name('product.add');
Route::post('/product/insert', 'ProductController@insert')->name('product.insert');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');