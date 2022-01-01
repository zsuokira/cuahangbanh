@extends('admin_layout')
@section('admin_content')   
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading"> THÊM SẢN PHẨM
                        </header>
                        <div class="panel-body">
                            <?php
                                    $message = Session::get('message');
                                    if ($message) {
                                        # code...
                                        echo $message;
                                        Session::put('message'.null);
                                    }
                                ?>
                            <div class="position-center">
                                @foreach($edit_product as $edit )
                                <form role="form" action ="{{route('update-product',$edit->id_product)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sản Phẩm</label>

                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$edit->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại Sản Phẩm</label>
                                    <select name = "type_product" class="form-control input-sm m-bot15">

                                        <option value = "{{$edit -> id}}">{{$edit->type_name}} </option>   

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả Sản phẩm</label>
                                    <textarea class="form-control " value="{{$edit->product_description}}" id="ccomment" name="product_description" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Bán</label>

                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1"
                                    value="{{$edit->unit_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Khuyến Mãi</label>

                                    <input type="text" name="product_promotion_price" class="form-control" 
                                    id="exampleInputEmail1" value="{{$edit->promotion_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>

                                    <input type="file" name="product_image" class="form-control" 
                                    id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đơn vị</label>

                                    <input type="text" name="product_unit" class="form-control" 
                                    id="exampleInputEmail1" value="{{$edit->unit}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sản Phẩm Mới</label>
                                    <select name = "new" class="form-control input-sm m-bot15">
                                        <option value="0" >Không </option>
                                        <option value ="1">Mới</option>                                       
                                    </select>
                                </div>

                                <button name = "add_product" type="submit" class="btn btn-info">Thêm sản phẩm</button>
                            </form>
                            </div>
                                        @endforeach
                        </div>
                    </section>

            </div>

        </div>

        @endsection