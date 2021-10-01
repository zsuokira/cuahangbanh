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