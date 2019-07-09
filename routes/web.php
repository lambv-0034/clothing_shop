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
Route::get('admin/category/store', 'Admin\CategoryController@getstore')->name('category.getstore');
Route::post('admin/category/store', 'Admin\CategoryController@store')->name('category.store');
Route::post('/category/storecateGory','Admin\CategoryController@categoryStore')->name('category.store');
Route::post('/category/storeitem', 'Admin\CategoryController@itemStore')->name('item.store');
Route::post('/category/storeitemhastype','Admin\CategoryController@ItemHasTypesStore')->name('itemhastype.store');
Route::get('/fetch/item-by-category', 'Admin\AjaxController@fetchItembyCategory')->name('fetch.itembycategory');

