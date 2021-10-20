<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class HoadonController extends Controller
{
    public function getHoaDon(){

        
        $all_bill = DB::table('bills')->join('customer','bills.id_customer','=','customer.id')->paginate(20);
        $manager_bill = view('admin.hoadon') ->with('hoadon',$all_bill);
         return view('admin_layout')->with('admin.hoadon',$manager_bill);

    }
   
}
