<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class TypeProduct extends Controller
{
    public function add_type_product(){

        
        return view('admin.add_type_product');

    }

      public function all_type_product(){

        $all_type_product = DB::table('type_products') -> get();
        $manager_type_product = view('admin.all_type_product') ->with('all_type_product',$all_type_product);

         return view('admin_layout')->with('admin.all_type_product',$manager_type_product);
        
    }

      public function save_type_product(Request $request){
        $data = array();
        $data['name'] = $request -> type_name;  
        $data['description'] = $request -> type_description;  

        DB::table('type_products')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('/add-type-product');   
    }
}
