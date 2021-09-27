<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }
    public function getDanhSachSP(){
       
        return view('page.danhsachsanpham');
    }
    public function getAddSP(){
        return view('page.themsanpham');
    }
    public function getDanhSachLSP($type){
        $loai_sp = ProductType :: where('id',$type)-> first();
        return view('page.danhsachloaisanpham',compact('loai_sp'));
    }
    public function getAddLSP(){
        return view('page.themloaisanpham');
    }
    public function getDonHang(){
        return view('page.donhang');
    }
}
