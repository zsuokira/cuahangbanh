<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(4); //lấy tất cả sản phẩm có giá trị new bằng 1 và phân trang
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
        return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai')); //--> truyền biến qua bên view

    }

    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }

     public function getChitiet(){
        return view('page.chitiet_sanpham');
    }

     public function getLienHe(){
        return view('page.lienhe');
    }

      public function getAbout(){
        return view('page.about');
    }
}
