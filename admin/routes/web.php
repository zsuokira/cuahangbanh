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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);
Route::get('danh-sach-san-pham',[
    'as' => 'danhsachsp',
    'uses' => 'PageController@getDanhSachSP'
]);
Route::get('them-san-pham',[
    'as' => 'addsp',
    'uses' => 'PageController@getAddSP'
]);
Route::get('danh-sach-loai-san-pham',[
    'as' => 'danhsachlsp',
    'uses' => 'PageController@getDanhSachLSP'
]);
Route::get('them-loai-san-pham',[
    'as' => 'addlsp',
    'uses' => 'PageController@getAddLSP'
]);
Route::get('danh-sach-don-hang',[
    'as' => 'danhsachdh',
    'uses' => 'PageController@getDonHang'
]);