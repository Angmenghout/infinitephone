<?php

use Illuminate\Support\Facades\Auth;
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


//return Homepage
Route::get('/', 'HomeController@home')->name('home');
Route::get('/item/detail/{id}', 'HomeController@showDetail')->name('home.show.detail');

Auth::routes();

Route::group(['prefix'=>'dashboard', 'middleware'=>['auth','auth.admin']], function () {

    #dashbaord page
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    //returning userRole in dashboardPage
    Route::get('/role', 'UserController@index')->name('user.role');

    //company controller
    Route::get('/item', 'CompanyController@index')->name('item.index');
    Route::get('/item/create', 'CompanyController@create')->name('item.create');
    Route::post('/item/store', 'CompanyController@store')->name('item.store');
    Route::get('/item/showItem/{id}', 'CompanyController@show')->name('item.show');
    Route::get('/item/editItem/{id}', 'CompanyController@edit')->name('item.edit');
    Route::patch('/item/updateItem/{id}', 'CompanyController@update')->name('item.update');
    Route::delete('/item/deleteItem/{id}', 'CompanyController@delete')->name('item.destroy');

});


