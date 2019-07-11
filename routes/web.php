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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/category','Admin\CategoryController@index')->name('category.index');
Route::post('/admin/category/{id}','Admin\CategoryController@destroy')->name('category.destroy');
Route::post('admin/category/store', 'Admin\CategoryController@store')->name('category.store');
Route::get('/fetch/type-by-category', 'Admin\AjaxController@fetchTypebyCategory')->name('fetch.typebycategory');

