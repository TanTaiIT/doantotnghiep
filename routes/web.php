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
Route::get('dangnhap1','Admin\LoginController@dangnhap1')->name('dangnhap1');
Route::get('login','Admin\LoginController@login')->name('log');
Route::post('dangnhap','Admin\LoginController@postlogin')->name('post_log');
Route::get('logout','Admin\LoginController@getLogout')->name('getLogout');
// Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {	
// 	Route::get('login','LoginController@getLogin')->name('getLogin');
// 	Route::post('login','LoginController@postLogin')->name('postLogin');
// 	Route::get('logout','LoginController@getLogout')->name('getLogout');
// });
Route::group(['prefix'=>'product','namespace'=>'Admin'],function(){
Route::get('index','ProductController@index')->name('pro_index');
Route::get('addpro','ProductController@addpro')->name('pro_add');
Route::post('them','ProductController@themsp')->name('themsp');
Route::get('edit_pro/{id}','ProductController@edit')->name('product_edit');
Route::post('update/{id}','ProductController@update')->name('pro_update');
Route::get('delete/{id}','ProductController@delete')->name('delete_pro');
Route::get('delete_all','ProductController@delete_all')->name('delete_all');
Route::get('kichhoat/{id}','ProductController@kichhoat')->name('kichhoat');
Route::get('huykichhoat/{id}','ProductController@huykichhoat')->name('huykichhoat');
Route::get('add_images/{id}','ProductController@add_img')->name('add_img');
Route::post('add_images1/{id}','ProductController@add_img1')->name('add_img1');
Route::get('del_img/{id}','ProductController@del_img')->name('del_img');

});
Route::post('/quickview','Admin\ProductController@quickview');

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

/*Sliser */
Route::get('/manage-slider','Admin\SliderController@manage_slider')->name('manage_sli');
Route::get('/add-slider','Admin\SliderController@add_slider')->name('add_sli');
Route::get('/delete-slide/{slide_id}','Admin\SliderController@delete_slide');
Route::post('/insert-slider','Admin\SliderController@insert_slider');
Route::get('/unactive-slide/{slide_id}','Admin\SliderController@unactive_slide');
Route::get('/active-slide/{slide_id}','Admin\SliderController@active_slide');



/* Client */
Route::group(['prefix'=>'cli','namespace'=>'Client'],function(){
   Route::get('/','ClientController@index')->name('cli_index');
   Route::get('/detail/{id}','ClientController@detail')->name('cli_detail');
   Route::post('/search','ClientController@search')->name('cli_search');
   // Route::get('/cart','CartController@cart')->name('cart');
   
   Route::get('/dangxuat_kh','ClientController@dangxuatkh')->name('dangxuat_kh');
   Route::get('/delivery','CheckoutController@delivery');
   // Route::post('/select-delivery','DeliveryController@select_delivery');
   Route::post('/select-delivery-home','CheckoutController@select_delivery_home');
   Route::get('/checkout','CheckoutController@checkout')->name('checkout');
   Route::get('/list-pro/{id}','ClientController@list_pro')->name('list_pro');
   Route::post('/cart/{id}','CartController@addtocart1')->name('addtocart1');
   

   
});
Route::post('/cart','Client\CartController@addtocart')->name('addtocart');
 Route::patch('update-cart','Client\CartController@update');
 Route::delete('remove-from-cart','Client\CartController@remove');
 Route::post('/select-delivery-home','Client\CheckoutController@delivery_home');

/* Cart */


/* Checkout */
Route::group(['prefix'=>'cli_check','namespace'=>'Client'],function(){
	Route::post('/dangky','CheckoutController@dangky')->name('dangky');
	Route::post('/dangnhap','CheckoutController@dangnhap')->name('dangnhap');
	Route::get('/payment','CheckoutController@payment')->name('payment');
});


/* Coupon */
Route::post('/check-coupon','Client\CouponController@check_coupon');
Route::get('/unset-coupon','Client\CouponController@unset_coupon');
Route::get('/insert-coupon','Client\CouponController@insert_coupon')->name('insert_coupon');
Route::get('/delete-coupon/{coupon_id}','Client\CouponController@delete_coupon')->name('delete_coupon');
Route::get('/list-coupon','Client\CouponController@list_coupon')->name('list_coupon');
Route::post('/insert-coupon-code','Client\CouponController@insert_coupon_code')->name('insert_coupon_code');


/* Delivery */

Route::get('/delivery','Client\DeliveryController@delivery');
Route::post('/select-delivery','Client\DeliveryController@select_delivery');
Route::post('/insert-delivery','Client\DeliveryController@insert_delivery');
Route::post('/select-feeship','Client\DeliveryController@select_feeship');
Route::post('/update-delivery','Client\DeliveryController@update_delivery');
Route::post('/calculate-fee','Client\CheckoutController@calculate_fee');
Route::get('/del-fee','Client\CheckoutController@del_fee');
Route::post('/confirm-order','Client\CheckoutController@confirm_order');

Route::get('/thankyou','Client\ClientController@thankyou')->name('thank');
Route::get('/manage-order','Admin\OrderController@manage_order');
Route::get('/view-order/{order_code}','Admin\OrderController@view_order');
Route::get('/print-order/{checkout_code}','Client\CheckoutController@print_order');


/* attribute */
Route::get('/attr','Admin\AttrController@add_attr')->name('add_attr');
Route::post('/them_attr','Admin\AttrController@store_attr')->name('store_attr');


Route::post('/tim-kiem','Client\ClientController@search');
Route::post('/autocomplete-ajax','Client\ClientController@autocomplete_ajax');
Route::post('/insert-rating','Client\ClientController@insert_rating');

Route::post('/add-cart-ajax','Client\CartController@add_cart_ajax');