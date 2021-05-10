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
Route::get('admin','Admin\AdminController@index')->name('admin_index');
Route::group(['prefix'=>'product','namespace'=>'Admin'],function(){
Route::get('index','ProductController@index')->name('pro_index');
Route::get('addpro','ProductController@addpro')->name('pro_add');
Route::post('them','ProductController@themsp')->name('themsp');
Route::get('edit_pro/{id}','ProductController@edit')->name('product_edit');
Route::post('update/{id}','ProductController@update')->name('pro_update');
Route::get('delete/{id}','ProductController@delete')->name('delete_pro');
Route::get('delete_all','ProductController@delete_all')->name('delete_all');
});

/* Categoy */

Route::group(['prefix'=>'category','namespace'=>'Admin'],function(){
Route::get('index','CategoryController@index')->name('cate_index');
Route::get('addcat','CategoryController@addcate')->name('cate_add');
Route::post('themcat','CategoryController@themcat')->name('themcat');
Route::get('edit_cat/{id}','CategoryController@edit')->name('cat_edit');
Route::post('update/{id}','CategoryController@update')->name('cate_update');
Route::get('delete/{id}','CategoryController@delete')->name('delete_cate');
Route::get('delete_all','ProductController@delete_all')->name('delete_all');
});

/* Brand */ 
Route::group(['prefix'=>'brand','namespace'=>'Admin'],function(){
Route::get('index','BrandController@index')->name('brand_index');
Route::get('addcat','BrandController@addbrand')->name('brand_add');
Route::post('themcat','BrandController@thembrand')->name('thembrand');
Route::get('edit_cat/{id}','BrandController@edit')->name('brand_edit');
Route::post('update/{id}','BrandController@update')->name('brand_update');
Route::get('delete/{id}','BrandController@delete')->name('delete_brand');
Route::get('delete_all','BrandController@delete_all')->name('delete_all');
});

/* Client */
Route::group(['prefix'=>'cli','namespace'=>'Client'],function(){
   Route::get('/','ClientController@index')->name('cli_index');
   Route::get('/detail/{id}','ClientController@detail')->name('cli_detail');
});