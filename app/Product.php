<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_product';

    public function product_type(){
        return $this->belongsTo('App\ProductType','id_type','product_name');
    }

    public function bill_detail(){

        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
