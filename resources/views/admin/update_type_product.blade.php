@extends('admin_layout')
@section('admin_content')   

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          THÊM DANH MỤC SẢN PHẨM
                        </header>
                        <div class="panel-body">
                            @foreach($update_type_product as $update)
                            	<?php
                                    $message = Session::get('message');
                                    if ($message) {
                                        # code...
                                        echo $message;
                                        Session::put('message'.null);
                                    }
                                ?>
                            <div class="position-center">
                                <form role="form" action ="{{route('update-type-product',$update -> id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>

                                    <input type="text" name="type_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value='{{$update -> name}}'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea class="form-control " id="ccomment" name="type_description"  required="">{{$update -> description}}</textarea>
                                </div>
                                </div>
                                <button name = "add_type_product" type="submit" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>
            </div>
        </div>
 @endsection
