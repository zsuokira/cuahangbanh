@extends('admin_layout')
@section('admin_content')   
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          THÊM DANH MỤC SẢN PHẨM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>

                                    <input type="email" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea class="form-control " id="ccomment" name="description" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại</label>
                                    <select class="form-control input-sm m-bot15">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>   
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

        </div>

        @endsection