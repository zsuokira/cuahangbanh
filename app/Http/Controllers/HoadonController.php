<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoadonController extends Controller
{
    public function getHoaDon(){

        
        return view('admin.hoadon');

    }
}
