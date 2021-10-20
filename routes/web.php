<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('loai-san-pham/{type}',[
    'as' =>'loaisanpham',
    'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
    'as' =>'chitietsanpham',
    'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he',[
    'as' =>'lienhe',
    'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
    'as' =>'gioithieu',
    'uses'=>'PageController@getGioiThieu'
]);
Route::get('add-to-cart/{id}',[
    'as' =>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
    'as' =>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
    'as' =>'dathang',
    'uses'=>'PageController@getCheckout'
]);
Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route ::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route ::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);

Route ::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@getSignin'
]);
Route ::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@postSignin'
]);
Route ::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);
Route ::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);

// Admin

Route ::get('admin',[
    'as'=>'admin',
    'uses'=>'AdminController@index'
]);

Route ::get('dashboard',[
    'as'=>'dashboard',
    'uses'=>'AdminController@show_dashboard'
]);


Route ::get('logoutAdmin',[
    'as'=>'logoutAdmin',
    'uses'=>'AdminController@logoutAdmin'
]);

Route ::post('dashboard',[
    'as'=>'dashboard',
    'uses'=>'AdminController@dashboard'
]);



// TypeProduct

Route ::get('add-type-product',[
    'as'=>'add-type-product',
    'uses'=>'TypeProduct@add_type_product'
]);
Route ::get('edit-type-product/{id}',[
    'as'=>'edit-type-product',
    'uses'=>'TypeProduct@edit_type_product'
]);

Route ::post('update-type-product/{id}',[
    'as'=>'update-type-product',
    'uses'=>'TypeProduct@update_type_product'
]);

Route ::get('delete-type-product/{id}',[
    'as'=>'delete-type-product',
    'uses'=>'TypeProduct@delete_type_product'
]);

Route ::get('all-type-product',[
    'as'=>'all-type-product',
    'uses'=>'TypeProduct@all_type_product'
]);

Route ::post('save-type-product',[
    'as'=>'save-type-product',
    'uses'=>'TypeProduct@save_type_product'
]);

//product

Route ::get('add-product',[
    'as'=>'add-product',
    'uses'=>'ProductController@add_product'
]);
Route ::get('edit-product/{id}',[
    'as'=>'edit-product',
    'uses'=>'ProductController@edit_product'
]);

Route ::post('update-product/{id}',[
    'as'=>'update-product',
    'uses'=>'ProductController@update_product'
]);

Route ::get('delete-product/{id}',[
    'as'=>'delete-product',
    'uses'=>'ProductController@delete_product'
]);

Route ::get('all-product',[
    'as'=>'all-product',
    'uses'=>'ProductController@all_product'
]);

Route ::post('save-product',[
    'as'=>'save-product',
    'uses'=>'ProductController@save_product'
]);

//hoadon
Route ::get('hoadon',[
    'as'=>'hoadon',
    'uses'=>'HoadonController@getHoaDon'
]);