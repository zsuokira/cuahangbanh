<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeProduct extends Controller
{
    public function add_type_product(){

        
        return view('admin.add_type_product');

    }

      public function all_type_product(){

         return view('admin.all_type_product');
        
    }
}
