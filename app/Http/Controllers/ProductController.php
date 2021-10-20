<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function add_product(){
        
        $type_product = DB::table('type_products') -> orderby('id','desc') -> get();
        

        return view('admin.add_product')->with('type_products',$type_product);
        

    }

      public function all_product(){
        $all_product = DB::table('products')->join('type_products','products.id_type','=','type_products.id')->paginate(20);
        $manager_product = view('admin.all_product') ->with('all_product',$all_product);

         return view('admin_layout')->with('admin.all_product',$manager_product);
        
    }

      public function save_product(Request $request){
        $data = array();
        $data['product_name'] = $request -> product_name;  
        $data['id_type'] = $request -> type_product;  
        $data['product_description'] = $request -> product_description;
        $data['unit_price'] = $request -> product_price;
        $data['promotion_price'] = $request -> product_promotion_price;      
        $data['unit'] = $request -> product_unit;
        $data['new'] = $request -> new;
        $get_image = $request -> file('product_image');
        if($get_image){
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image -> move(base_path().'/public/source/image/product',$new_image);
            $data['image'] = $new_image;
            DB::table('products')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('/add-product'); 
        }
        $data['image'] = "";
        Session::put('message','Thêm sản phẩm không thành công');
        return Redirect::to('/add-product');   
    }
    public function edit_product($id){
        $edit_product = DB::table('products')->join('type_products','products.id_type','=','type_products.id') 
        -> where('id_product',$id)->get();
        $manager_product = view('admin.edit_product') ->with('edit_product',$edit_product);

         return view('admin_layout')->with('admin.edit_product',$manager_product);
    }

    public function update_product(Request $request, $id){

      $data = array();
        $data['product_name'] = $request -> product_name;  
        $data['id_type'] = $request -> type_product;  
        $data['product_description'] = $request -> product_description;
        $data['unit_price'] = $request -> product_price;
        $data['promotion_price'] = $request -> product_promotion_price;      
        $data['unit'] = $request -> product_unit;
        $data['new'] = $request -> new;
        $get_image = $request -> file('product_image');
        if($get_image){
            $new_image = rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image -> move(base_path().'/public/source/image/product',$new_image);
            $data['image'] = $new_image;
            DB::table('products')->where('id_product',$id)->update($data);
            Session::put('message','Sửa sản phẩm thành công');
            return Redirect::to('/add-product'); 
        }
        $data['image'] = "";
        Session::put('message','Sửa sản phẩm không thành công');
        return Redirect::to('/all-product'); 

    }

    public function delete_product($id){


      DB::table('products')->where('id_product',$id)->delete();

      Session::put('message','Xoá sản phẩm thành công');
      return Redirect::to('/all-product'); 


    }
}
