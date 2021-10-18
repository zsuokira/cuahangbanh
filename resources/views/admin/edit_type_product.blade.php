@extends('admin_layout')
@section('admin_content')   

 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        CẬP NHẬT DANH MỤC SẢN PHẨM
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

                                @foreach($edit_type_product as $key => $edit_value )
                            <div class="position-center">
                                <form role="form" action ="{{route('update-type-product',$edit_value -> id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>

                                    <input value ="{{$edit_value -> name}}" type="text" name="type_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea   class="form-control " id="comment" name="type_description" required="" >{{$edit_value -> description}}</textarea>
                                </div>
                                </div>
                                <button name = "update_type_product" type="submit" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                                @endforeach
                        </div>
                    </section>

            </div>

        </div>
     </div>
        
@endsection
    