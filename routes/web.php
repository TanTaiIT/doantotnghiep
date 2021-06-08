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
//Route::get('admin','Admin\AdminController@index')->name('admin_index')->middleware('CheckUser');;

Route::get('/404','Client\ClientController@error_page')->name('404_page');
Route::group(['prefix'=>'login','namespace'=>'Admin'],function(){
   Route::get('login','loginController@getdangnhap')->name('login');
   Route::post('postlogin','loginController@postdangnhap')->name('postlogin');
   Route::get('singup','loginController@getdangky')->name('singup');
   Route::post('postsingup','loginController@postdangky')->name('postsingup');
   //Route::get('xacnhantaikhoan','loginController@xacnhanTK')->name('xacnhanTK');

   Route::get('singout','loginController@dangxuat')->name('singout');
});
Route::get('home','Client\ClientController@get_home')->name('home');
// Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {   
//    Route::get('login','LoginController@getLogin')->name('getLogin');
//    Route::post('login','LoginController@postLogin')->name('postLogin');
//    Route::get('logout','LoginController@getLogout')->name('getLogout');
// });
Route::group(['middleware'=>'roles','prefix'=>'product','namespace'=>'Admin'],function(){
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

Route::group(['middleware'=>'roles','prefix'=>'category','namespace'=>'Admin'],function(){
Route::get('index','CategoryController@index')->name('cate_index');
Route::get('addcat','CategoryController@addcate')->name('cate_add');
Route::post('themcat','CategoryController@themcat')->name('themcat');
Route::get('edit_cat/{id}','CategoryController@edit')->name('cat_edit');
Route::post('update/{id}','CategoryController@update')->name('cate_update');
Route::get('delete/{id}','CategoryController@delete')->name('delete_cate');
Route::get('delete_all','ProductController@delete_all')->name('delete_all');
});

/* Brand */ 
Route::group(['middleware'=>'roles','prefix'=>'brand','namespace'=>'Admin'],function(){
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
   
   Route::get('/dangxuat_kh','ClientController@dangxuatkh')->name('dangxuat_kh');
   Route::get('/delivery','CheckoutController@delivery');
   // Route::post('/select-delivery','DeliveryController@select_delivery');
   Route::post('/select-delivery-home','CheckoutController@select_delivery_home');
   Route::get('/checkout','CheckoutController@checkout')->name('checkout');
   Route::get('/list-pro/{id}','ClientController@list_pro')->name('list_pro');
   Route::get('/tai','ClientController@tai')->name('tai');
   
});
Route::post('/cart','Client\CartController@addtocart')->name('addtocart');
 Route::patch('update-cart','Client\CartController@update');
 Route::delete('remove-from-cart','Client\CartController@remove');
 Route::post('/select-delivery-home','Client\CheckoutController@delivery_home');

/* Cart */


/* Checkout */
Route::group(['prefix'=>'cli_check','namespace'=>'Client'],function(){
   Route::post('/dangky','CheckoutController@dangky')->name('dangky');
   Route::get('xacnhantaikhoan','CheckoutController@xacnhanTK')->name('xacnhanTK');
   Route::post('/dangnhap','CheckoutController@dangnhap')->name('dangnhap');
   Route::get('/payment','CheckoutController@payment')->name('payment');

   //Tìm lại mật khẩu
   
   Route::post('/postlaymk','CheckoutController@postSendcoderesetpassowrd')->name('postlaymk');
   Route::get('/getdoimk','CheckoutController@getdoimk')->name('getdoimk');
   Route::post('/postdoimk','CheckoutController@postdoimk')->name('postdoimk');
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
Route::post('/update-order-qty','Admin\OrderController@update_order_qty');
Route::post('/update-qty','Admin\OrderController@update_qty');


/* attribute */
Route::get('/attr','Admin\AttrController@add_attr')->name('add_attr');
Route::post('/them_attr','Admin\AttrController@store_attr')->name('store_attr');
Route::post('/tim-kiem','Client\ClientController@search');
Route::post('/autocomplete-ajax','Client\ClientController@autocomplete_ajax');
Route::post('/insert-rating','Client\ClientController@insert_rating');
Route::post('/add-cart-ajax','Client\CartController@add_cart_ajax');

Route::get('/add-category-post','Admin\CategoryPost@add_category_post');
Route::get('/all-category-post','Admin\CategoryPost@all_category_post');
Route::get('/edit-category-post/{category_post_id}','Admin\CategoryPost@edit_category_post');
Route::post('/save-category-post','Admin\CategoryPost@save_category_post');
Route::post('/update-category-post/{cate_id}','Admin\CategoryPost@update_category_post');
Route::get('/delete-category-post/{cate_id}','Admin\CategoryPost@delete_category_post');

Route::get('/add-post','Admin\PostController@add_post');
Route::get('/all-post','Admin\PostController@all_post');
Route::get('/delete-post/{post_id}','Admin\PostController@delete_post');
Route::get('/edit-post/{post_id}','Admin\PostController@edit_post');
Route::post('/save-post','Admin\PostController@save_post');
Route::post('/update-post/{post_id}','Admin\PostController@update_post');
Route::get('/danh-muc-bai-viet/{post_slug}','Admin\PostController@danh_muc_bai_viet');
Route::get('/bai-viet/{post_slug}','Admin\PostController@bai_viet');

Route::get('/register-auth','Admin\AuthController@register_auth')->name('regis');
Route::get('/login-auth','Admin\AuthController@login_auth')->name('login_auth');
Route::get('/logout-auth','Admin\AuthController@logout_auth')->name('logout_auth');

Route::post('/register','Admin\AuthController@register');
Route::post('/login1','Admin\AuthController@login1');



Route::get('users','Admin\UserController@index')->name('user');
Route::get('add-users','Admin\UserController@add_users');
Route::get('delete-user-roles/{admin_id}','Admin\UserController@delete_user_roles');
Route::post('store-users','Admin\UserController@store_users');
Route::post('assign-roles','Admin\UserController@assign_roles');
Route::get('impersonate/{admin_id}','Admin\UserController@impersonate');
Route::get('impersonate-destroy','Admin\UserController@impersonate_destroy');