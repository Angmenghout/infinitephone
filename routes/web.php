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

//Route::get('/', function () {
//    return view('welcome');
//});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'dashboard', 'middleware'=>['auth','auth.admin']], function () {

    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard.index');

    Route::get('/item', 'CompanyController@index')->name('item.index');

    Route::get('/item/create', 'CompanyController@create')->name('item.create');
    Route::post('/item/store', 'CompanyController@store')->name('item.store');

    Route::get('/item/addItem', 'CompanyController@create')->name('item.addItem');

    Route::get('/item/showItem', 'CompanyController@show')->name('item.showItem');

    Route::get('/item/editItem/{id}', 'CompanyController@edit')->name('item.editItem');
//    Route::patch('/item/updateItem/{id}', 'CompanyController@update')->name('item.updateItem');
//
//    Route::get('/item/deleteItem', 'CompanyController@delete')->name('item.deleteItem');

    Route::get('/role', 'UserController@index')->name('user.role');

});

Route::view('/test','companydetail');


