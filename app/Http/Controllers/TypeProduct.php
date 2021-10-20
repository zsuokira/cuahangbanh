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
        $data['type_name'] = $request -> type_name;  
        $data['description'] = $request -> type_description;  

        DB::table('type_products')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('/add-type-product');   
    }
    public function edit_type_product($id){
        $edit_type_product = DB::table('type_products') -> where('id',$id)->get();
        $manager_type_product = view('admin.edit_type_product') ->with('edit_type_product',$edit_type_product);

         return view('admin_layout')->with('admin.edit_type_product',$manager_type_product);
    }

    public function update_type_product(Request $request, $id){

      $data = array();
      $data['type_name'] = $request -> type_name;  
      $data['description'] = $request -> type_description;  

      DB::table('type_products')->where('id',$id)->update($data);

      Session::put('message','Cập nhật danh mục sản phẩm thành công');
      return Redirect::to('/all-type-product'); 

    }

    public function delete_type_product($id){


      DB::table('type_products')->where('id',$id)->delete();

      Session::put('message','Xoá danh mục sản phẩm thành công');
      return Redirect::to('/all-type-product'); 


    }
}
