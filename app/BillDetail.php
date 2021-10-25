<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

     public function product(){
        return $this->belongsTo('App\Product','product_name','id');      
}
     public function bill(){
        return $this->belongsTo('App\Bill','id_bill','id');
     }
}
