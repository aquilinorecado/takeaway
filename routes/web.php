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

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('team', 'UserController@team')->name('team');


Route::get('/takeaway', 'TakeAwayController@index')->name('takeaway.index');
Route::get('/takeaway/details/{id}', 'TakeAwayController@details')->name('takeaway.details');
Route::get('/takeaway/add', 'TakeAwayController@add')->name('takeaway.add');
Route::post('/takeaway/insert', 'TakeAwayController@insert')->name('takeaway.insert');
Route::get('/takeaway/edit/{id}', 'TakeAwayController@edit')->name('takeaway.edit');
Route::post('/takeaway/update/{id}', 'TakeAwayController@update')->name('takeaway.update');
Route::get('/takeaway/delete/{id}', 'TakeAwayController@delete')->name('takeaway.delete');
Route::get('/takeaway/list', 'TakeAwayController@list')->name('takeaway.list');

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



Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/details/{id}', 'ProductController@details')->name('product.details');
Route::get('/product/add', 'ProductController@add')->name('product.add');
Route::post('/product/insert', 'ProductController@insert')->name('product.insert');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::get('/product/form', 'ProductController@form')->name('product.form');
Route::get('/product/user', 'ProductController@userAjax');
Route::get('/product/list', 'ProductController@list')->name('product.list');
Route::get('/product/search/{id}', 'ProductController@list')->name('product.search');