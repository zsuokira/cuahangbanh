<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
       
        // return view('page.trangchu',['slide' => $silde]);
        return view('page.trangchu',compact('slide'));

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
